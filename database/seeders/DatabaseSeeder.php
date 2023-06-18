<?php

namespace Database\Seeders;

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
        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        \App\Models\Post::truncate();
        \App\Models\Comment::truncate();

        // $user = \App\Models\User::factory()->create();
        // $category = \App\Models\Category::factory()->create();
        // $posts = \App\Models\Post::factory(10)->create([
        //     "user_id" => $user->id
        // ]);
        \App\Models\Comment::factory(10)->create();


        // $personal = \App\Models\Category::create([
        //     "name" => "Personal",
        //     "slug" => "personal"
        // ]);
        // $family = \App\Models\Category::create([
        //     "name" => "Family",
        //     "slug" => "family"
        // ]);
        // $work = \App\Models\Category::create([
        //     "name" => "Work",
        //     "slug" => "work"
        // ]);

        // \App\Models\Post::create([
        //     "title" => "My Personal Post",
        //     "slug" => "my-personal-post",
        //     "user_id" => $user->id,
        //     "category_id" => $personal->id,
        //     "excerpt" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        //     "body" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>",
        // ]);

        // \App\Models\Post::create([
        //     "title" => "My Family Post",
        //     "slug" => "my-family-post",
        //     "user_id" => $user->id,
        //     "category_id" => $family->id,
        //     "excerpt" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        //     "body" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>",
        // ]);

        // \App\Models\Post::create([
        //     "title" => "My Work Post",
        //     "slug" => "my-work-post",
        //     "user_id" => $user->id,
        //     "category_id" => $work->id,
        //     "excerpt" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>",
        //     "body" => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>",
        // ]);
    }
}
