<?php

use Illuminate\Database\Seeder;
use App\InfoPost;
use App\Blog;
use Faker\Generator as Faker;

class InfoPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Blog::all();

        foreach ($posts as $post) {
            //creazione instanza
            $newInfoPost = new InfoPost;

            //valorizzazione delle proprieta'
            $newInfoPost->blog_id = $post->id;
            $newInfoPost->post_status = $faker->randomElement(['public', 'private', 'draft']);
            $newInfoPost->comment_status = $faker->randomElement(['open', 'private', 'closed']);;

            //salvataggio proprieta'
            $newInfoPost->save();

        }
    }
}
