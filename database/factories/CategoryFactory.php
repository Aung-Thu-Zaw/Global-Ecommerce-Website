<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "category_id"=>fake()->numberBetween(2, 8),
            "name"=>fake()->unique()->name(),
            "slug"=>fake()->unique()->slug(),
            "image"=>fake()->imageUrl(),
            "status"=>"show"
        ];
    }
}
