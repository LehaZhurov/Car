<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marka' => $this->faker->randomElement(
                [
                    'AUDI',
                    'ASTON MARTIN',
                    'BENTLEY',
                    'BMW',
                    'CADILLAC',
                    'CHEVROLET',
                    'DODGE',
                    'FORD',
                    'HONDA',
                    'HYUNDAI',
                    'INFINITI',
                    'JAGUAR',
                    'KIA',
                    'LAND ROVER',
                    'LANCIA',
                    'LEXUS',
                    'MAZDA',
                    'MERCEDES',
                    'MITSUBISHI',
                    'NISSAN',
                    'SKODA',
                    'SUBARU',
                    'SUZUKI',
                    'TOYOTA',
                    'ROLLS-ROYCE',
                    'VOLKSWAGEN'
                ]
            ),
            'driver_id' => DriverFactory::new(),
            'free' => $this->faker->numberBetween(0, 1),
            'comfort_leval' =>  $this->faker->numberBetween(1, 3)
        ];
    }
}
