<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkIn = $this->faker->dateTimeBetween('now', '+1 month');
        $checkOut = $this->faker->dateTimeBetween($checkIn, '+2 months');

        return [
            'customer_id' => Customer::factory(),
            'room_id' => Room::factory(),
            'check_in_date' => $checkIn->format('Y-m-d'),
            'check_out_date' => $checkOut->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
