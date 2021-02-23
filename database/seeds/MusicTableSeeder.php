<?php

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('music')->insert([
            [
                'title' => 'サンプル1',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 1,
                'image' => '/images/samples/1.jpeg',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
            [
                'title' => 'サンプル2',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 2,
                'image' => '/images/samples/2.png',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
            [
                'title' => 'サンプル3',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 3,
                'image' => '/images/samples/3.png',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
            [
                'title' => 'サンプル4',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 4,
                'image' => '/images/samples/4.jpg',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
            [
                'title' => 'サンプル5',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 1,
                'image' => '/images/samples/5.jpg',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
            [
                'title' => 'サンプル6',
                'description' => 'フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明フレーズの説明',
                'user_id' => 1,
                'category_id' => 2,
                'image' => '/images/samples/6.jpg',
                'mp3' => 'http://www.ne.jp/asahi/music/myuu/wave/kanpai.mp3',
                'status' => 1,
            ],
        ]);
    }
}
