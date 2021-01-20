<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'https://picsum.photos/' . rand(400, 700) . '/' . rand(200, 700) . '?random=' . rand(1, 20),
            'alternative' => $this->faker->sentence(rand(2, 15)),
        ];
    }
}
