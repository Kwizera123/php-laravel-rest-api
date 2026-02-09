<?php

namespace Database\Seeders;
use App\Models\Post\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            "title" => "First Post",
            "body" => "First Body Post",
            "views" => 1,
            "user_id" => 1
        ]);
    }
}
