<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QueueController extends Controller
{
    public function akta()
    {
        $this->validate(request(), [
            'service' => 'required',
            'surat_kelahiran' => 'required|file',
            'akta_ayah' => 'required|file',
            'akta_ibu' => 'required|file',
            'kartu_keluarga' => 'required|file',
            'ktp_ayah' => 'required|file',
            'ktp_ibu' => 'required|file',
            'buku_nikah' => 'required|file',
        ]);

        $queue = $this->persistData('akta_kelahiran');

        return redirect()->route('registration.ticket', $queue);
    }

    public function ktp()
    {
        $this->validate(request(), [
            'service' => 'required',
            'surat_kelahiran' => 'required|file',
            'akta_kelahiran' => 'required|file',
            'kartu_keluarga' => 'required|file',
            'foto' => 'required|file',
        ]);

        $queue = $this->persistData('kartu_tanda_penduduk');

        return redirect()->route('registration.ticket', $queue);
    }

    public function kk()
    {
        $this->validate(request(), [
            'service' => 'required',
            'surat_kelahiran' => 'required|file',
            'buku_nikah' => 'required|file',
            'surat_cerai' => 'file',
            'akta_kelahiran' => 'file',
        ]);

        $queue = $this->persistData('kartu_keluarga');

        return redirect()->route('registration.ticket', $queue);
    }

    public function ticket(Queue $queue)
    {
        if ($queue->user_id !== auth()->user()->id) {
            abort(403);
        }

        return Inertia::render('DocumentRegistration/Ticket', compact('queue'));
    }

    protected function persistData($path)
    {
        $user = auth()->user();
        $queue = new Queue();
        $queue->service = request('service');
        $queue->number = $queue->generateNumber();
        $queue->schedule = $queue->calculateSchedule();
        foreach (request()->file() as $field => $file) {
            $fileName = md5(now() . rand()) . '.' . $file->extension();
            $queue->{$field} = $file->storeAs("{$path}/{$user->id}", $fileName);
        }

        $user->queues()->save($queue);
        return $queue;
    }
}
