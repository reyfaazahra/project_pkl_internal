<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
{
    return User::updateOrCreate(
        ['email' => $row['email']], // patokan unik
        [
            'name'     => $row['name'],
            'password' => Hash::make('12345678'),
            'role'     => 'user',
            'kelas_id' => $row['kelas_id'] ?? 1,
        ]
    );
}
}
