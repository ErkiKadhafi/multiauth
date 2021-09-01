<?php

namespace Database\Factories;

use App\Models\Book;
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
        $numbers = '0123456789';
        $isbn = '';

        for($i=1;$i<=10;$i++){
            $index = rand(0, strlen($numbers)-1);
            $isbn .= $numbers[$index];
        }

        return [
            'isbn' => $isbn->unique(),    
            'title' => $this->faker->sentence(),
            'cathegory' => $this->faker->colorName(),
            'publisher' => $this->faker->company(),
            'language' => $this->faker->country(),
            'stock' => rand(1, 10),
            'pages' => rand(500, 1000),
            'rack' => rand(1, 5),
        ];
    }
}
