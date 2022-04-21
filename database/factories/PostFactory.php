<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'user_id' => $this->faker->numberBetween(1, 5),
            'content' => implode('<br/><br/>', $this->faker->paragraphs(8)),
            'description' => $this->faker->sentence(5),
            'published_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'title' => Str::title($this->faker->words(4, true))
        ];
    }
}
