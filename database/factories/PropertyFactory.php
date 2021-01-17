<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'price' => rand(1000, 10000000),
            'surface' => rand(5, 5000),
            'rooms' => rand(0, 25),
            'state' => $this->faker->randomElement(['Neuf', 'Rénovation', 'Abandonner', 'Ancien']),
            'constructionYear' => rand(1900, Carbon::now()->year),
            'postcode' => $this->faker->postcode,
            'town' => $this->faker->city,
            'type_id' => Type::all()->random()->id,
        ];
    }
}
