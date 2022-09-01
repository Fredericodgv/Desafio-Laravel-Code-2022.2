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
        $randomSweet = rand(0, 4);
        return [
            'name' => ['Beijinho', 'Chocobom', 'Brigadeiro', 'Cajuzinho', 'Casadinho'][$randomSweet],
            'flavor' => ['Coco', 'Chocolate', 'Chocolate', 'chocolate com amendoim', 'Goiabada'][$randomSweet],
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 5),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
