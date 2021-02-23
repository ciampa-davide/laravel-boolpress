<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP'
        ];

        foreach($tags as $tag){

            $newTag = new Tag();

            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag);

            $newTag->save();
        };
    }
}
