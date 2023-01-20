<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Nikah', 'Content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Nikah?', 'Content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga', 'Content'=>'lorem ipsum'],
        ];

        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
