<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Test Post 1',
            'content' => 'This is the content of Test Post 1.',
        ]);

        Post::create([
            'title' => 'Test Post 2',
            'content' => 'This is the content of Test Post 2.',
        ]);
    }
}
