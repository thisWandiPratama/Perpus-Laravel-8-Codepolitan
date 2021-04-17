<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $randomNumber = rand(1, 100);
        $radomCover = "https://picsum.photos/id/{$randomNumber}/200/300";

        return [
            'author_id' => Author::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->sentence(50),
            'cover' => $radomCover,
            'qty' => rand(10, 20)
        ];
    }
}
