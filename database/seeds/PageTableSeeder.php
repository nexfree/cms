<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder {
    public function run() {
        $pages = [
            ['Home', 'home', 'home.png', 'ravuthz'],
            ['About', 'about', 'about.png', 'ravuthz'],
            ['Contact', 'contact', 'contact.png', 'ravuthz'],
            ['Music', 'music', 'music.png', 'ravuthz'],
            ['Video', 'video', 'video.png', 'ravuthz'],
            ['Movie', 'movie', 'movie.png', 'ravuthz']
        ];

        foreach ($pages as $page) {
            DB::table('pages')->insert([
                'title'        => $page[0],
                'slug'         => $page[1],
                'description'  => '',
                'image'        => $page[2],
                'author'       => $page[3],
                'click_count'  => 0,
                'layout'       => rand(1, 5),
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
                'deleted_at'   => Carbon::now(),
                'published_at' => Carbon::now()
            ]);
        }
    }
}
