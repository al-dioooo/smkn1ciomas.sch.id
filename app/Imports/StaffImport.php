<?php

namespace App\Imports;

use App\Models\Staff;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StaffImport implements OnEachRow, WithHeadingRow
{
    /**
     * @param Row $row
     */
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();

        $staff = Staff::firstOrCreate([
            'nik' => $row['nik'],
            'nip' => $row['nip'],
            'nuptk' => $row['nuptk'],
        ]);

        $staff->auth()->create([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => bcrypt($row['password']),
        ]);
    }
}
