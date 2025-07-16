<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'kelas_id' => 1,
            'password' => bcrypt('rahasia'),
            'isAdmin' => '2',
        ]);

         \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'kelas_id' => 2,
            'password' => bcrypt('12345678'),
            'isAdmin' => '1',
        ]);
    }
}