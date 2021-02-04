<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni'=>$this->faker->numberBetween(12345741,74125896),
            'nombre'=>$this->faker->Name,
            'telefono'=>$this->faker->phoneNumber
        ];
    }
}
