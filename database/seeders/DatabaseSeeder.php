<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Aldio Lisafron',
            'email' => 'lisafronaldio123@gmail.com  ',
            'email_verified_at' => now(),
            'password' => bcrypt('aldio1234'),
            'remember_token' => Str::random(10),
        ]);

        $student = Student::create([
            'nis' => '1234123412',
            'major' => 'pplg',
            'class' => 'XII PPLG 1'
        ]);

        $student->auth()->create([
            'name' => 'Alice Evergarden',
            'email' => 'alice@mydrive.id',
            'password' => bcrypt('aldio1234'),
        ]);

        $staff = Staff::firstOrCreate([
            'nik' => '3201290604050005',
        ]);

        $staff->auth()->create([
            'name' => 'Licia Lupin',
            'email' => 'licia.l@gmail.com',
            'password' => bcrypt('aldio1234'),
        ]);
    }
}
