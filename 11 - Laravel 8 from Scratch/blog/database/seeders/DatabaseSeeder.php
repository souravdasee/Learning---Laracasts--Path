<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-first-post',
            'title' => 'My Personal Post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quisquam libero delectus voluptatem ut numquam, atque dolore? Quam veritatis facere optio, doloremque rerum, dolorem vel maiores vitae consectetur deserunt ullam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quam laboriosam repellendus consequatur tenetur dolore vel nisi assumenda laborum neque dolorum eos eveniet ipsam, velit corporis animi molestiae nostrum optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt consectetur, fuga accusantium, praesentium, nihil consequatur in facilis id maxime impedit! Ea voluptate nulla nostrum dolor illum nisi, quidem libero.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'slug' => 'my-second-post',
            'title' => 'My Family Post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quisquam libero delectus voluptatem ut numquam, atque dolore? Quam veritatis facere optio, doloremque rerum, dolorem vel maiores vitae consectetur deserunt ullam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quam laboriosam repellendus consequatur tenetur dolore vel nisi assumenda laborum neque dolorum eos eveniet ipsam, velit corporis animi molestiae nostrum optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt consectetur, fuga accusantium, praesentium, nihil consequatur in facilis id maxime impedit! Ea voluptate nulla nostrum dolor illum nisi, quidem libero.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-third-post',
            'title' => 'My Work Post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quisquam libero delectus voluptatem ut numquam, atque dolore? Quam veritatis facere optio, doloremque rerum, dolorem vel maiores vitae consectetur deserunt ullam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quam laboriosam repellendus consequatur tenetur dolore vel nisi assumenda laborum neque dolorum eos eveniet ipsam, velit corporis animi molestiae nostrum optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt consectetur, fuga accusantium, praesentium, nihil consequatur in facilis id maxime impedit! Ea voluptate nulla nostrum dolor illum nisi, quidem libero.</p>'
        ]);

    }
}
