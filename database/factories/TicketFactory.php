<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['open', 'in_progress', 'closed'];

        return [
            'title' => fake()->title(),
            'description' => fake()->sentence(),
            'category' => fake()->title(),
            'client_id' => User::factory(),
            'technician_id' => User::factory(),
            'status' => $status[rand(0, 2)],
        ];
    }
}
