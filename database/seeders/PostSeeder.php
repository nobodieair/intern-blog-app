<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Managing Director',
            'content' => 'My first post',
        ]);
        Post::create([
            'title' => 'Manager',
            'content' => 'My second post',
        ]);
        Post::create([
            'title' => 'Head of Department',
            'content' => 'My third post',
        ]);
        Post::create([
            'title' => 'Sectary',
            'content' => 'My first post',
        ]);
        Post::create([
            'title' => 'Cleaner',
            'content' => 'My second post',
        ]);
        Post::create([
            'title' => 'Clerk',
            'content' => 'My third post',
        ]);
    }
}
