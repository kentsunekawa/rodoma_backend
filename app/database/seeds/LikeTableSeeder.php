<?php

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes = [
            [
                'user_id' => 2,
                'post_id' => 1
            ],
            [
                'user_id' => 3,
                'post_id' => 1
            ],
            [
                'user_id' => 4,
                'post_id' => 1
            ],
            [
                'user_id' => 5,
                'post_id' => 1
            ],
        ];
        foreach($likes as $like) {
            Like::create($like);
        }
    }
}
