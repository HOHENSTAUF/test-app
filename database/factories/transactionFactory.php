<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class transactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(), //Generates a fake sentence
            'price' => $this->faker->randomNumber(2), //generates fake price
            'name' => $this->faker->title(), //generates fake name
            'number' => $this->faker->randomNumber(2), //generates fake phone number
            'email' => $this->faker->title(), //generates fake email
            'company_name' => $this->faker->title(), //generates fake company name
            'address' => $this->faker->sentence, //generates fake address
            
            /*'user_id' => User::factory() //Generates a User from factory and extracts id */
            

        ];
    }
}
