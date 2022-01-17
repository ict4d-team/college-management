<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            'Form 1',
            'Form 2',
            'Form 3',
            'Form 4',
            'Form 5',
            'Lower Sixth',
            'Upper Sixth',
        ];

        foreach ($classes as $class) {
            Classe::create([
                'name' => $class
            ]);
        }
    }
}
