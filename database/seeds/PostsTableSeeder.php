<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = new Post();
        $post->title = 'Codegym';
        $post->teaser = 'Introduction';
        $post->content = 'Hello';
        $post->created = '2018-11-19';
        $post->save();
        $post = new Post();
        $post->title = 'Internship';
        $post->teaser = 'Introduction';
        $post->content = 'Happy';
        $post->created = '2018-11-01';
        $post->save();
    }
}
