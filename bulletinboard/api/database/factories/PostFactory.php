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
            'title' => $this->faker->text(8),
            'description' => $this->faker->text(50),
            'status' => config('constant.POST.STATUS.ACTIVE'),
            'create_user_id' => rand(1, 5),
            'update_user_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
