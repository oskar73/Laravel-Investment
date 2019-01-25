<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fname = $this->faker->firstName;
        $lname = $this->faker->lastName;
        $fullname = Str::lower($fname).Str::lower($lname);
        $status = $this->faker->numberBetween(0,2);
        switch ($status) {
            case 1:
                $status = 'active';
                break;

            case 2:
                $status = 'inactive';
                break;

                default:
                $status = 'pending';
                break;
        }
        return [
            'username' => $fullname,
            'first_name' => $fname,
            'last_name' => $lname,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => $this->faker->phoneNumber,
            'user_type' => 'user',
            'status' => $status
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
