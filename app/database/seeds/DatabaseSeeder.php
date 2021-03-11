<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // $this->call(SnsTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(ProfileTableSeeder::class);
        // $this->call(ProfileToSnsMapTableSeeder::class);
        // $this->call(SpecialtyTableSeeder::class);
        // $this->call(SubjectTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        // $this->call(RelationTableSeeder::class);

        $this->call(LikeTableSeeder::class);
        $this->call(MarkTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
