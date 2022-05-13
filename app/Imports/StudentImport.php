<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StudentImport implements OnEachRow, WithHeadingRow
{
    /**
     * @param Row $row
     */
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();

        $student = Student::firstOrCreate([
            'nis' => $row['nis'],
            'major' => $row['major'],
            'class' => $row['class']
        ]);

        $student->auth()->create([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => bcrypt($row['password']),
        ]);
    }
}
