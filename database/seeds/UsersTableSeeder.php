<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama_lengkap' => 'Admin',
                'tempat_lahir' => 'Cianjur',
                'tanggal_lahir' => '1997-06-24',
                'jenis_kelamin' => 'l',
                'no_ponsel' => '08987668061',
                'kata_sandi' => bcrypt('admin'),
                'is_active' => true,
                'is_admin' => true
            ],
            [
                'nama_lengkap' => 'User',
                'tempat_lahir' => 'Cianjur',
                'tanggal_lahir' => '1992-06-24',
                'jenis_kelamin' => 'p',
                'no_ponsel' => '08987668062',
                'kata_sandi' => bcrypt('user'),
                'is_active' => true,
                'is_admin' => false
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
