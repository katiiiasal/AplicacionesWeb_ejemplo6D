<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->text(20),
            'descripcion'=>$this->faker->sentence(),
            'existencia'=>$this->faker->randomNumber(),
            'precio'=>$this->faker->randomFloat(2)
        ];
    }
}
