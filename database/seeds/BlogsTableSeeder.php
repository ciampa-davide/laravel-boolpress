<?php

use Illuminate\Database\Seeder;
use App\Blog;
//integro il faker
use App\Generator as Faker;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    //ciclo for per generare n post
    {
       for( $i = 0; $i<5; $i++){

        $data = $faker->dateTime(); //setto un valore che avra' una data per il create e l'update

        $blog = new Blog();
        $blog->name= $faker->sentence(2);
        $blog->comment= $faker->text($maxNbChars = 40);   
        $blog->text= $faker->text($maxNbChars = 40);
        $blog->img_path=$faker->text($maxNbChars = 40);
        $blog->created_at=$data;
        $blog->updated_at=$data;
        $blog->save();
       }
    }
}