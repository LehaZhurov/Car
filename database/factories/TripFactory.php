<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_id' => CarFactory::new(),
            'start_trip' => $this->faker->dateTimeBetween('-1 day'),
            'end_trip' => $this->faker->dateTimeBetween("+1 hour","+5 hour"),
        ];
    }
}
