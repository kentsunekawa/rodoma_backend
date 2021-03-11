<?php

use Illuminate\Database\Seeder;
use App\Models\Relation;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relations = [
            [
                'follower_id' => 1,
                'followed_id' => 3,
            ],
            [
                'follower_id' => 1,
                'followed_id' => 5,
            ],
            [
                'follower_id' => 2,
                'followed_id' => 1,
            ],
            [
                'follower_id' => 3,
                'followed_id' => 1,
            ],
            [
                'follower_id' => 4,
                'followed_id' => 1,
            ],
            [
                'follower_id' => 5,
                'followed_id' => 1,
            ],
        ];
        foreach($relations as $relation) {
            Relation::create($relation);
        }
    }
}
