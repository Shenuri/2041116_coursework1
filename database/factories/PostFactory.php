<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
                'post_body' => $this->faker->realText($maxNbChars = 50),
                'view_count' =>$this->faker->randomDigit(),
                'like_count' =>$this->faker->randomDigit(),
                'comment_count' =>$this->faker->randomDigit(),
                'user_id' =>  User::inRandomOrder()->first()->id,
    
            ];
    }
}
