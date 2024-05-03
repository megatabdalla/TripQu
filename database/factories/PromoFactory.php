<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promo>
 */
class PromoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'isi' => $this->faker->paragraph(mt_rand(5, 10)),
            'katID' => mt_rand(1,3),
            'userID' => mt_rand(1, 5)
        ];
    }
}
