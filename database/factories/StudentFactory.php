<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genders = ['male', 'female'];
        $rand = rand(0,1); $gender = $genders[$rand];

        $nbre_classes = Classe::count();

//        $dirS = "public/uploads/students/photos";
//
//        $profile = $this->faker->image($dirS= $dirS, $width=640, $height=480, 'cats', false);

        return [
            'firstname' => $this->faker->firstName($gender),
            'lastname' => $this->faker->lastName($gender),
            'gender' => $gender,
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            // 'photo' => $profile,
            'classe_id' => rand(1, $nbre_classes)
        ];
    }
}
