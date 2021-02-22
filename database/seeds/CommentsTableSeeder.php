<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\Comment;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Blog::all();

        foreach($posts as $post){

           for ($i=0; $i < 3; $i++) { 

            $newComment = new Comment();
            $commentData = $faker->dateTime();
            $newComment->blog_id = $post->id;
            $newComment->author = $faker->userName;
            $newComment->text = $faker->sentence(10);
            $newComment->created_at = $commentData;
            $newComment->updated_at = $commentData;
            $newComment->save(); 

            }
        }
    }
}
