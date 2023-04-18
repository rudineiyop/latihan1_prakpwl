<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use DB;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i;
        $userIds = User::pluck('id')->toArray();
        
 
        for($i = 1; $i <= 5; $i++){
            $posts [] = [
                'title'        => $faker->sentence(rand(5, 10)),
                'excerpt'      => $faker->sentence(rand(10, 20)),
                'content'      => $faker->paragraphs(3, true),
                'image'        => $faker->imageUrl($width = 640, $height = 480),
                'author_id'    => collect($userIds)->random()
            ];
        }
        DB::table("posts")->insert($posts);
    }
}
