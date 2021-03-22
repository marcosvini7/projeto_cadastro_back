<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostumerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Costumer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'medical_record' => $this->faker->randomNumber(),
            'phone' => $this->faker->phoneNumber,
            'cel' => $this->faker->phoneNumber,
            'zipcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'complement' => $this->faker->streetAddress,
            'address_number' => $this->faker->postcode,
            'district' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'birth' => $this->faker->dateTimeThisCentury(),
            'age' => $this->faker->numberBetween(1, 120),
            'gender' => $this->faker->word(),
            'rg' => $this->faker->randomNumber(),
            'organ_rg' => $this->faker->word(),
            'cpf' => $this->faker->randomNumber()

        ];
    }
}
