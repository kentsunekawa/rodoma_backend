<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'user_id' => 2,
                'post_id' => 1,
                'comment' => 'Hello',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 3,
                'post_id' => 1,
                'comment' => 'This is Good Post.',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 3,
                'post_id' => 1,
                'comment' => 'LGTM',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 4,
                'post_id' => 1,
                'comment' => 'めちゃめちゃいいやん！！',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
            [
                'user_id' => 3,
                'post_id' => 1,
                'comment' => 'I like you.',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now'),
            ],
        ];
        foreach($comments as $comment) {
            Comment::create($comment);
        }
    }
}
