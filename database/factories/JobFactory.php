<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(),
            "title" => fake()->jobTitle(),
            "salary" => "$" . (fake()->numberBetween(1, 10)) . ",000 USD",
            "location" => fake()->randomElement(["Remote", "On Site"]),
            "schedule" => fake()->randomElement(["Full Time", "Part Time"]),
            "url" => fake()->url(),
            "featured" => fake()->boolean(20),
        ];
    }
}
