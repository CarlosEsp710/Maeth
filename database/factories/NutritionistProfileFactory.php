<?php

namespace Database\Factories;

use App\Models\NutritionistProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class NutritionistProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NutritionistProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'description' => $this->faker->text,
            'identification_card' => $this->faker->randomNumber,
            'curriculum' => $this->faker->url
        ];
    }
}
