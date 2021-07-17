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
            'category_id' => \App\Models\Category::factory(),
            'user_id'=> \App\Models\User::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'content' => '<p>' . implode('</p><p> ' , $this->faker->paragraphs(10)) . '</p>',
            //'image' => $this->faker->image('public/images', 1024, 1024, null, false)
            'image' => 'https://picsum.photos/1024/1024?random=' . random_int(1, 4000)
        ];
    }
}
