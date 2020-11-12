<?php

namespace Database\Factories;

use App\Models\like;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> function(){
               return \App\Models\User::all()->random();
            },
            'reply_id'=> function(){
                return \App\Models\Reply::all()->random();
             },
        ];
    }
}
