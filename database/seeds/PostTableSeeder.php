<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Recipe title',
            'ingredients' => 'Some ingredients',
            'method' => 'Some method'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'Other Recipe',
            'ingredients' => 'Seeder recipe',
            'method' => 'Stuff'
        ]);
        $post->save();        
    }
}
