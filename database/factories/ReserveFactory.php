<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReserveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quantity = rand(1, 3);
        return [
            'user_id' => rand(1, 10),
            'activity_id' => rand(1, 30),
            'quantity' => $quantity,
            'sub_total' => $quantity * rand(100, 800),
        ];
    }
}
