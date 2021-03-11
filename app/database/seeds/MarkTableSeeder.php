<?php

use Illuminate\Database\Seeder;
use App\Models\Mark;

class MarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marks = [
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
        foreach($marks as $mark) {
            Mark::create($mark);
        }
    }
}
