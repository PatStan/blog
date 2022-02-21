<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        //User::factory(5)->create();

        Post::factory(20)->create();

//         $user = User::factory()->create();
//
//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//
//         $work = Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//
//         $hobby = Category::create([
//             'name' => 'Hobby',
//             'slug' => 'hobby'
//         ]);
//
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $personal->id,
//             'title' => 'Personal Post',
//             'slug' => 'personal-post',
//             'excerpt' => 'beep boop personal',
//             'body' => 'shut it shut the heck up will you just keep it down i have had enough'
//         ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'Work Post',
//            'slug' => 'work-post',
//            'excerpt' => 'werk',
//            'body' => 'shut it shut the hecgfsgsfgsdgk up will you just keep it down i have had enough'
//        ]);

    }
}
