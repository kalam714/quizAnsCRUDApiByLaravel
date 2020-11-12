<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

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
            'category_id'=> function(){
              return  \App\Models\Category::all()->random();
            },

            'title'=>$this->faker->title,

            'slug'=>Str::random(10),
            'body'=>$this->faker->text,
           
            
            
        ];
    }
}
