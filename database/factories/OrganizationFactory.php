<?php

namespace Database\Factories;

use App\Enums\OrganizationTypeEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company,
            'fantasy_name' => $this->faker->company,
            'slug' => $this->faker->unique()->slug,
            'other_name' => $this->faker->optional()->company,
            'type' => $this->faker->randomElement(OrganizationTypeEnum::getValues()),
            'abstract' => $this->faker->optional()->sentence,
            'description' => $this->faker->optional()->paragraph,
            'founding_date' => $this->faker->optional()->date(),
            'dissolution_date' => $this->faker->optional()->date(),
            'image_path' => $this->faker->optional()->imageUrl(),
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
