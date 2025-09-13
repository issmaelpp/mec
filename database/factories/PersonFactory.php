<?php

namespace Database\Factories;

use App\Enums\GenderEnum;
use App\Enums\StatusEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'family_name' => $this->faker->lastName,
            'given_name' => $this->faker->firstName,
            'additional_name' => $this->faker->firstName,
            'other_name' => $this->faker->firstName,
            'honorific_prefix' => null,
            'gender' => $this->faker->randomElement(GenderEnum::getValues()),
            'birth_date' => $this->faker->dateTimeBetween('-100 years', '-10 years'),
            'death_date' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'summary' => $this->faker->sentence,
            'biography' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(StatusEnum::getValues()),
        ];
    }

    public function deleted(): static
    {
        return $this->state(fn (array $attributes) => [
            'deleted_at' => now(),
        ]);
    }
}
