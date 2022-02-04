<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
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

        $subjects = [ "Maths", "Art","English","Music","History","Science","Geography","Information technology","Biology","Drama","Swimming","Physical education"];

        return [
            'firstname' => $this->faker->firstName($gender),
            'lastname' => $this->faker->lastName($gender),
            'gender' => $gender,
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id_number' => $this->faker->swiftBicNumber,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            'subject' => $subjects[rand(0, count($subjects)-1)],
            // 'photo' => $profile,
            'classe_id' => rand(1, $nbre_classes)
        ];
    }
}
