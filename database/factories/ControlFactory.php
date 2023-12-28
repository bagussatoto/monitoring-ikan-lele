<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Control>
 */
class ControlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'temperature' => $this->faker->randomFloat(2, 20, 40),
            'turbidity' => $this->faker->randomFloat(2, 25, 600),
            'ph' => $this->faker->randomFloat(2, 2, 10),
            'jarak' => $this->faker->randomFloat(2, 2, 10),
            'pompa_masuk' => $this->faker->randomElement(['Hidup', 'Mati']),
            'pompa_keluar' => $this->faker->randomElement(['Hidup', 'Mati']),
        ];
    }
}
