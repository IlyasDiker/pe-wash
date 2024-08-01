<?php

namespace Database\Factories;

use App\Enums\BizType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biz>
 */
class BizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->sentence(),
            'type' => BizType::getRandomValue(),
            'city' => fake()->city(),
            'phone' => fake()->e164PhoneNumber(),
            'address' => fake()->address(),
            'coordinates' => fake()->latitude(21.42, 35.92) . ',' . fake()->longitude(-17.1, -1.01),
        ];
    }
}
