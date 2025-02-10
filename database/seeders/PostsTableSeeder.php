<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create([
            'title' => 'Example Post Title',
            'content' => 'This is an example post content.',
            'category' => 'Technology',
            'image' => 'AIrUEGOicgDSVWmmUlDY5O7QMFeKQ2jue7Ca2jTo.jpg', // Pastikan file ada di storage
            'created_at' => Carbon::now(),
        ]);
    }
}
