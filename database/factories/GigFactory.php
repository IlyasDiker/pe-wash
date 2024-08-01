<?php

namespace Database\Factories;

use App\Enums\GigStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gig>
 */
class GigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isDone = random_int(0, 1) === 1;
        $initialNumber = random_int(10, 250);

        return [
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(10),
            'address_road' => fake()->streetAddress(),
            'address_suburb' => fake()->streetName(),
            'address_city' => fake()->city(),
            'address_region' => fake()->stateAbbr(),
            'coordinates' => fake()->latitude(21.42, 35.92) . ',' . fake()->longitude(-17.1, -1.01),
            'initial_price' => $initialNumber,
            'final_price' => $isDone ? fake()->numberBetween($initialNumber, 250) : null,
            'status' => $isDone ? GigStatus::Finished : GigStatus::Pending,
            'user_id' => User::factory(),
        ];
    }
}
