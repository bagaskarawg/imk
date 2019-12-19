<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Authy\AuthyApi;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/aktivasi';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

        $this->authy = new AuthyApi(config('services.twilio.authy_api_key'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required', 'integer'],
            'bln_lahir' => ['required', 'integer'],
            'thn_lahir' => ['required', 'integer'],
            'jenis_kelamin' => ['required', 'in:l,p'],
            'no_ponsel' => ['required', 'string', 'max:255', 'unique:users'],
            'kata_sandi' => ['required', 'string', 'min:8'],
            'kata_sandi_ulang' => ['required', 'same:kata_sandi'],
            'captcha' => ['required', 'captcha'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $phone = $data['no_ponsel'];
        $response = $this->authy->phoneVerificationStart($phone, 62, 'sms');
        if ($response->ok()) {
            Log::info("Verification sent to {$phone}: {$response->message()}");
        } else {
            Log::error("Failed to send verification SMS to {$phone}: {$response->message()}");
        }

        return User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => "{$data['thn_lahir']}-{$data['bln_lahir']}-{$data['tgl_lahir']}",
            'jenis_kelamin' => $data['jenis_kelamin'],
            'no_ponsel' => $phone,
            'kata_sandi' => Hash::make($data['kata_sandi']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return Inertia::render('Register', [
            'captcha' => captcha_src('flat'),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $this->validator(request()->all())->validate();

        event(new Registered($user = $this->create(request()->all())));

        Session::flash('user', $user);
        return redirect($this->redirectPath());
    }

    public function showActivationForm()
    {
        if (!Session::has('user')) {
            return redirect()->route('register');
        }

        return Inertia::render('Activation', [
            'captcha' => captcha_src('flat')
        ]);
    }

    public function resendActivationCode()
    {
        if (!Session::has('user')) {
            return redirect()->route('register');
        }

        $phone = request('no_ponsel');
        $response = $this->authy->phoneVerificationStart($phone, 62, 'sms');
        if ($response->ok()) {
            Log::info("Verification re-sent to {$phone}: {$response->message()}");
        } else {
            Log::error("Failed to resend verification SMS to {$phone}: {$response->message()}");
        }

        Session::flash('user', User::find(request('user_id')));
        return redirect()->route('activation');
    }

    public function activate()
    {
        $validator = Validator::make(request()->all(), [
            'no_ponsel' => ['required', 'exists:users'],
            'user_id' => ['required', 'exists:users,id'],
            'kode_aktivasi' => ['required'],
            'captcha' => ['required', 'captcha'],
        ]);

        $validator->validate();

        $response = $this->authy->phoneVerificationCheck(request('no_ponsel'), 62, request('kode_aktivasi'));
        $user = User::find(request('user_id'));
        if ($response->ok()) {
            $user->is_active = true;
            $user->save();

            Log::info("OK: {$response->message()}");
            Auth::login($user);
            return redirect()->route('home');
        } else {
            Log::error("NOT OK: {$response->message()}");
            Session::flash('user', $user);
            return redirect()->back()->withErrors(['kode_aktivasi' => 'Kode aktivasi yang anda masukkan salah!']);
        }
    }
}
