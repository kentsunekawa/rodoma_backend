<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'post_id' => 1,
                'label' => 0,
                'linked_post_id' => null,
                'renge_start' => 0,
                'renge_end' => 50,
                'title' => 'HTML',
                'description' => 'HTML を勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'post_id' => 1,
                'label' => 1,
                'linked_post_id' => 2,
                'renge_start' => 20,
                'renge_end' => 80,
                'title' => 'CSS',
                'description' => 'CSS を勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'post_id' => 1,
                'label' => 3,
                'linked_post_id' => 3,
                'renge_start' => 30,
                'renge_end' => 90,
                'title' => 'JavaScript',
                'description' => 'JavaScript を勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'post_id' => 1,
                'label' => 4,
                'linked_post_id' => null,
                'renge_start' => 0,
                'renge_end' => 100,
                'title' => 'WEB の仕組み',
                'description' => 'WEB の仕組み を勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'post_id' => 2,
                'label' => 0,
                'linked_post_id' => null,
                'renge_start' => 0,
                'renge_end' => 100,
                'title' => 'CSS の基礎',
                'description' => 'まずは基礎から勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'post_id' => 3,
                'label' => 3,
                'linked_post_id' => null,
                'renge_start' => 0,
                'renge_end' => 100,
                'title' => 'JavaScript とは',
                'description' => 'まずはJavaScript とは、勉強しましょう。',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
        ];
        foreach($subjects as $subject) {
            DB::table('subjects')->insert($subject);
        }
    }
}
