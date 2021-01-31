<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(3, 12)),
            'imageUrl' => 'https://picsum.photos/' . rand(400, 700) . '/' . rand(200, 700) . '?random=' . rand(1, 20),
            'wysiwyg_text' => $this->faker->randomHtml(),
        ];
    }
}
