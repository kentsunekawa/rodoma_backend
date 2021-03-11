<?php

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
        $posts = [
            [
                'user_id' => 1,
                'category_id' => 2,
                'specialty_id' => 2,
                'release_status' => 1,
                'title' => 'HTML / CSS / JavaScript を学習してサイトを作成できまでの学習',
                'description' => '頑張って勉強しましょう。',
                'eye_catch_url' =>  'assets/eyeCatch/post1.jpg',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'specialty_id' => 2,
                'release_status' => 1,
                'title' => 'CSS の学習方法',
                'description' => 'CSS を頑張って勉強しましょう。',
                'eye_catch_url' =>  'assets/eyeCatch/post2.jpg',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'specialty_id' => 2,
                'release_status' => 1,
                'title' => 'JavaScript の学習方法',
                'description' => 'JavaScript を頑張って勉強しましょう。',
                'eye_catch_url' =>  'assets/eyeCatch/post3.jpg',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
        ];

        foreach($posts as $post) {
            DB::table('posts')->insert($post);
        }
    }
}
