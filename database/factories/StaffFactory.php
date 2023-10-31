<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'staff_name' => $this->faker->name,
            'staff_phone' => $this->faker->numberBetween('0', '10000000'),
            'staff_address' => $this->faker->address,
            'email' => $this->faker->email,
            'password'=> bcrypt('123456'),
        ];
    }
}
