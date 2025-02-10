<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'category' => $this->faker->word,
            'image' => 'AIrUEGOicgDSVWmmUlDY5O7QMFeKQ2jue7Ca2jTo.jpg', // Sesuaikan dengan gambar yang ada
            'created_at' => now(),
        ];
    }
}
