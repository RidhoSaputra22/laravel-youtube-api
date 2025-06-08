<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'title' => 'Wild breakthrough on Math after 56 years... [Exclusive]',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/1.png',
                'videoUrl' => config('app.url') . '/file/video/1.mp4',
                'datePosted' => '2025-05-15',
                'views' => '46K',
                'likes' => '1,7 rb',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '1',
            ],
            [
                'title' => 'lain sings u duvet',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/2.png',
                'videoUrl' => config('app.url') . '/file/video/2.mp4',
                'datePosted' => '2023-05-15',
                'views' => '1.1M',
                'likes' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '2',
            ],
            [
                'title' => 'New maths discoveries! All announced at once!',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/3.png',
                'videoUrl' => config('app.url') . '/file/video/3.mp4',
                'datePosted' => '2025-05-15',
                'views' => '87K',
                'likes' => '1,5 jt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '3',
            ],
            [
                'title' => 'Google\'s New "AlphaEvolve" SHOCKING Ability...',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/4.png',
                'videoUrl' => config('app.url') . '/file/video/4.mp4',
                'datePosted' => '2025-05-15',
                'views' => '50K',
                'likes' => '2,34 rb',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '4',
            ],
            [
                'title' => 'Lain sings u duvet - Juliana Chahayed\'s Cover of Bôa - Duvet',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/5.png',
                'videoUrl' => config('app.url') . '/file/video/5.mp4',
                'datePosted' => '2023-05-15',
                'views' => '1.6M',
                'likes' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '5',
            ],
            [
                'title' => 'New "Absolute Zero" Model Learns with NO DATA',
                'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/6.png',
                'videoUrl' => config('app.url') . '/file/video/6.mp4',
                'datePosted' => '2025-05-09',
                'views' => '60K',
                'likes' => '',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                'user_id' => '7',
            ],
        ];

        foreach ($datas as $data) {
            Video::create($data);
        }
    }
}
