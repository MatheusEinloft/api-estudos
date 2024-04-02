<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paid = $this->faker->boolean();
        return [
            'user_id' => User::all()->random()->id,
            'type' => $this->faker->randomElement(['B',',C','P']),
            'paid' => $paid,
            'value' => $this->faker->numberBetween(1000, 10000),
            'payments_date' => $paid ? $this->faker->randomElement([$this->faker->dateTimeThisMonth()]) : null
        ];
    }
}
