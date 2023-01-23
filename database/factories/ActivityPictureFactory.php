<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityPictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "activity_id" => rand(1, 20),
            "src" => $this->faker->imageUrl()
        ];
    }
}
