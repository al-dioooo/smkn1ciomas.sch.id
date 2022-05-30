<?php

namespace App\Http\Controllers;

use App\Enums\StudentMajor;
use App\Enums\UserType;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Imports\StudentImport;
use App\Models\User;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::filter(request()->only('search'))->latest()->paginate(10)->withQueryString();

        $data = [
            'students' => $students
        ];

        return Inertia::render('Student/List', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Student/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new Student([
            'nis' => $request->input('nis'),
            'nisn' => $request->input('nisn'),
            'major' => $request->input('major'),
            'class' => $request->input('class'),
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $student->save();
        $student->auth()->save($user);

        return redirect()->route('dashboard.student.index')->banner('Yay, successfully added a new student to the list!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $data = [
            'student' => $student
        ];

        return Inertia::render('Student/Show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data = [
            'student' => $student
        ];

        return Inertia::render('Student/Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        if ($request->file('school_certificate') !== null) {
            if ($student->school_certificate_link && file_exists(storage_path($student->school_certificate_link))) {
                unlink(storage_path($student->school_certificate_link));
            }
            $student->school_certificate_link = $request->file('school_certificate')->storePublicly('certificates', ['disk' => 'public']);
        }

        if ($request->file('family_certificate') !== null) {
            if ($student->family_certificate_link && file_exists(storage_path($student->family_certificate_link))) {
                unlink(storage_path($student->family_certificate_link));
            }
            $student->family_certificate_link = $request->file('family_certificate')->storePublicly('certificates', ['disk' => 'public']);
        }

        if ($request->file('birth_certificate') !== null) {
            if ($student->birth_certificate_link && file_exists(storage_path($student->birth_certificate_link))) {
                unlink(storage_path($student->birth_certificate_link));
            }
            $student->birth_certificate_link = $request->file('birth_certificate')->storePublicly('certificates', ['disk' => 'public']);
        }

        $student->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back()->banner("Yay, successfully deleted {$student->name}!");
    }

    public function import()
    {
        Excel::import(new StudentImport(), request()->file('file'));

        return redirect()->back()->banner('Yay, successfully imported data from Microsoft Excel!');
    }

    public function deleteCertificate(Student $student, $certificate)
    {
        if ($certificate == 'school-certificate') {
            if ($student->school_certificate_link && file_exists(storage_path($student->school_certificate_link))) {
                unlink(storage_path($student->school_certificate_link));
            }
            $student->school_certificate_link = null;
        } else if ($certificate == 'family-certificate') {
            if ($student->family_certificate_link && file_exists(storage_path($student->family_certificate_link))) {
                unlink(storage_path($student->family_certificate_link));
            }
            $student->family_certificate_link = null;
        } else if ($certificate == 'birth-certificate') {
            if ($student->birth_certificate_link && file_exists(storage_path($student->birth_certificate_link))) {
                unlink(storage_path($student->birth_certificate_link));
            }
            $student->birth_certificate_link = null;
        }

        $student->save();

        return redirect()->back();
    }
}
