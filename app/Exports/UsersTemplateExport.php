<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersTemplateExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return new Collection([]); // ❗ kosong
    }

    public function headings(): array
    {
        return [
            'name',
            'email',
            'password',
            'role'
        ];
    }
}