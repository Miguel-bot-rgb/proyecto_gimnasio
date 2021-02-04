<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->numberBetween(12314785, 74125896),
            'nombre' => $this->faker->firstName,
            'apellido_p' => $this->faker->firstName,
            'apellido_m' => $this->faker->lastName,
            'edad' => $this->faker->numberBetween(18, 45),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'telefono' => $this->faker->phoneNumber,
            'correo' => $this->faker->safeEmail,
            'id_direccion' => $this->faker->numberBetween(1, 5),
            'cargo' => $this->faker->randomElement(['Gerente', 'Secretaria', 'Limpieza']),
            'sueldo' => $this->faker->numberBetween(1500, 2500),
            'tipo_A' => $this->faker->numberBetween(0, 1),
            'tipo_E' => $this->faker->numberBetween(0, 1)
        ];
    }
}
