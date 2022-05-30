<?php

namespace App\Http\Controllers;

use App\Enums\StudentMajor;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMajors()
    {
        $data = [];

        foreach (StudentMajor::cases() as $row) {
            array_push(
                $data,
                [
                    'value' => $row,
                    'name' => $row->resolveName()
                ]
            );
        }

        return response()->json($data);
    }

    public function getClasses(Request $request)
    {
        $major = StudentMajor::tryFrom($request->major);

        $data = $major->getClasses();

        return response()->json($data);
    }
}
