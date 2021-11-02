<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 10),
            'excerpt' => $this->faker->text(60),
            'photo' => 'https://picsum.photos/1920/1080',
            'photoAlt' => $this->faker->text(60),
            'content' => $this->faker->text(180),
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
