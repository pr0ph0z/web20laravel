<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'User Satu',
        //     'email' => 'user.satu@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        //     'remember_token' => Str::random(10)
        // ]);

        $userSatu = \App\Models\User::factory()->userSatu()->create();

        $otherUsers = \App\Models\User::factory()->count(5)->create();

        $users = $otherUsers->concat([$userSatu]);

        $posts = \App\Models\BlogPost::factory()->count(20)->make()->each(function ($post) use ($users) {
            $post->user_id = $users->random()->id;
            $post->save();
        });

        \App\Models\Comment::factory()->count(20)->make()->each(function ($comment) use ($posts) {
            $comment->blog_post_id = $posts->random()->id;
            $comment->save();
        });
    }
}
