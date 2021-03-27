<?php

namespace Database\Factories\Payments;

use App\Models\Payments\Main as Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_name' => $this->faker->name
        ];
    }
}
