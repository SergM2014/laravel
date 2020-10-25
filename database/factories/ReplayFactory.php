<?php

namespace Database\Factories;

use App\Models\Replay;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReplayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Replay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::inRandomOrder()->first(),
            'conversation_id' => Conversation::inRandomOrder()->first(),
            'body' => $this->faker->sentence,
        ];
    }
}
