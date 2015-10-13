<?php

use App\Article; 
use Illuminate\Database\Seeder;
 
class ArticleTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('articles')->delete();
 
        $articles = array(
            ['id' => 1, 'title' => 'Project 1', 'body' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          
        );
 
        // Uncomment the below to run the seeder
        DB::table('articles')->insert($articles);
    }
 
}
 

