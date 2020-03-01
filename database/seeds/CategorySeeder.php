<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('categories')->truncate();
        factory(App\Category::class, 50)->create();
        
    //     foreach($categories as $category)
    //     {
    //         App\Category::create($category);
    //     }
    }
}