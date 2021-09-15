<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // Post::create([
        //     "user_id"=>"1",
        //     "category_id"=>"1",
        //     "title"=>"Blog Pertama",
        //     "slug"=>"blog_pertama",
        //     "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum magnam sint tenetur rerum doloribus sunt voluptatum dolores, aut tempora quidem magni adipisci et recusandae incidunt cupiditate consectetur sit exercitationem vel aliquid eum assumenda placeat saepe? Totam quia, nihil laborum accusantium itaque veniam reiciendis dolores illum sequi quae incidunt, at quos odit pariatur. Quia, ducimus? Consectetur, culpa rem iure quasi minima neque odit voluptatibus fugit a incidunt aliquam itaque sapiente commodi temporibus ullam asperiores hic deserunt mollitia architecto veritatis eveniet maiores! Et officiis velit ex quisquam. Nihil officia fugiat ea, quae consequatur sit eum ut facere quo, suscipit aspernatur cupiditate quam!"
        // ]);

        // Post::create([
        //     "user_id"=>"2",
        //     "category_id"=>"2",
        //     "title"=>"Blog Kedua",
        //     "slug"=>"blog_kedua",
        //     "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum magnam sint tenetur rerum doloribus sunt voluptatum dolores, aut tempora quidem magni adipisci et recusandae incidunt cupiditate consectetur sit exercitationem vel aliquid eum assumenda placeat saepe? Totam quia, nihil laborum accusantium itaque veniam reiciendis dolores illum sequi quae incidunt, at quos odit pariatur. Quia, ducimus? Consectetur, culpa rem iure quasi minima neque odit voluptatibus fugit a incidunt aliquam itaque sapiente commodi temporibus ullam asperiores hic deserunt mollitia architecto veritatis eveniet maiores! Et officiis velit ex quisquam. Nihil officia fugiat ea, quae consequatur sit eum ut facere quo, suscipit aspernatur cupiditate quam!"
        // ]);
        
        // Post::create([
        //     "user_id"=>"2",
        //     "category_id"=>"1",
        //     "title"=>"Blog Ketiga",
        //     "slug"=>"blog_ketiga",
        //     "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum magnam sint tenetur rerum doloribus sunt voluptatum dolores, aut tempora quidem magni adipisci et recusandae incidunt cupiditate consectetur sit exercitationem vel aliquid eum assumenda placeat saepe? Totam quia, nihil laborum accusantium itaque veniam reiciendis dolores illum sequi quae incidunt, at quos odit pariatur. Quia, ducimus? Consectetur, culpa rem iure quasi minima neque odit voluptatibus fugit a incidunt aliquam itaque sapiente commodi temporibus ullam asperiores hic deserunt mollitia architecto veritatis eveniet maiores! Et officiis velit ex quisquam. Nihil officia fugiat ea, quae consequatur sit eum ut facere quo, suscipit aspernatur cupiditate quam!"
        // ]);
        

        // Factory Post
        User::factory(3)->create();
        
        Category::create([
            "name"=>"Education",    
            "slug"=>"education"
        ]);
        
        Category::create([
            "name"=>"Travelling",    
            "slug"=>"travellig"
        ]);

        // post 
        Post::factory(20)->create();
        
        // User::create([
        //     "name"=>"admin1",
        //     "email"=>"admin123@gmail.com",
        //     "password"=>bcrypt('12345')
        // ]);
        
        // User::create([
        //     "name"=>"admin2",
        //     "email"=>"admin99@gmail.com",
        //     "password"=>bcrypt('12345')
        // ]);        
    }
}
