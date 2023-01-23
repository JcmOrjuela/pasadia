<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $day = rand(1, 28);
        $month = rand(1, 12);
        $year = rand(2023, 2024);
        $date = "$year-$month-$day";

        $start_date = date('Y-m-d', strtotime($date));
        $due_date = date('Y-m-d', strtotime($date . '20 day'));
        return [
            "title" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(),
            "start_date" => $start_date,
            "due_date" => $due_date,
            "price" => rand(100, 800),
            "qualification" => rand(1, 5),
        ];
    }
}
