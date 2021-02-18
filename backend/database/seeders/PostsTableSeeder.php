<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
              'user_id' => 1,
              'category_id' => 1,
              'title' => 'hoge',
              'content' => 'test',
              'image' => 'test1.jpg'
            ],
            [
              'user_id' => 1,
              'category_id' => 1,
              'title' => 'hoge',
              'content' => 'test2',
              'image' => 'test2.jpg'
            ],
            [
              'user_id' => 1,
              'category_id' => 1,
              'title' => 'hoge',
              'content' => 'test3',
              'image' => 'test3.jpg'
            ]
        ]);
    }
}