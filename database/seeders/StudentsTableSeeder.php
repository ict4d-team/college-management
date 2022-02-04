<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bd = "database/seeders/students.sql";
        DB::unprepared(file_get_contents($bd));

        // Student::factory()->count(2800)->create();
    }
}
