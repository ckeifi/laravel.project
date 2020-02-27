<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
    public function run()
    {   
        \DB::table('category_post');
        // DB::table('posts')->truncate();
        factory(App\Post::class, 50)->create();
    }
 }
 