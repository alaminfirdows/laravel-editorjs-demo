<?php

namespace Database\Factories;

use AlAminFirdows\LaravelEditorJs\Facades\LaravelEditorJs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'blocks'  => $blocks = json_encode([
                'time'   => time(),
                'blocks' => [
                    [
                        'id'   => Str::random(10),
                        'type' => 'paragraph',
                        'data' => [
                            'text' => $this->faker->sentence,
                        ],
                    ],
                ],
            ]),
        ];
    }
}
