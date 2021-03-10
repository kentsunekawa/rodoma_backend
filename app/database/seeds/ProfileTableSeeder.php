<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'user_id' => 1,
                'category_id' => 2,
                'specialty_id' => 2,
                'icon_url' => '/icon/user1.jpg',
                'catch_copy' => 'BEYOND Must Be Beautiful',
                'description' => 'Hi, I am Ken Tsunekawa.',
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'specialty_id' => 9,
                'icon_url' => '/icon/user2.jpg',
                'catch_copy' => 'For Beautiful Human Life.',
                'description' => 'Hi, I am aaa aaaaaaa.',
            ],
            [
                'user_id' => 3,
                'category_id' => 4,
                'specialty_id' => 15,
                'icon_url' => '/icon/user3.jpg',
                'catch_copy' => 'Inspire the Next.',
                'description' => 'Hi, I am bbb bbbbbbb.',
            ],
            [
                'user_id' => 4,
                'category_id' => 5,
                'specialty_id' => 17,
                'icon_url' => '/icon/user4.jpg',
                'catch_copy' => 'JUST DO IT.',
                'description' => 'Hi, I am ccc ccccccc.',
            ],
            [
                'user_id' => 5,
                'category_id' => 6,
                'specialty_id' => 24,
                'icon_url' => '/icon/user5.jpg',
                'catch_copy' => 'For Beautiful Human Life.',
                'description' => 'Hi, I am aaa aaaaaaa.',
            ],
        ];
        foreach($profiles as $profile) {
            DB::table('profiles')->insert($profile);
        }
    }
}
