<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => ['Beijinho', 'Chocobom', 'Bala de Coco', 'Bala de Goma', 'Bala de Leite', 'Bala de Morango', 'Bala de Pimenta', 'Bala de Tamarindo', 'Bala de Uva', 'Bala de Vinho'][rand(0, 9)],
            'flavor' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 5),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
