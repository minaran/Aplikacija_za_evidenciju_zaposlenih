<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=> fake()->firstName,
            'last_name'=> fake()->lastName,
            'date_of_birth'=> now(),
            'date_of_joining'=> now(),
            'neto_salary'=> fake()->numberBetween(0,1500),
            'annual_leave' => fake()->numberBetween(0,25),
            'qualifications'=> fake()->title(),
            'department_id'=>Department::factory(),
        ];
    }
}
