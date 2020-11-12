<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Catrgory;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Like;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Question::factory(10)->create();
        \App\Models\Reply::factory(20)->create();
        \App\Models\Like::factory(10)->create();
        
       
    }
}
