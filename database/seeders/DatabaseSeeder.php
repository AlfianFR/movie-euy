<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tahun = new \App\Models\tahun_rilis();
        $tahun->tahun = '2018';
        $tahun->save();

        $tahun = new \App\Models\tahun_rilis();
        $tahun->tahun = '2019';
        $tahun->save();

        $tahun = new \App\Models\tahun_rilis();
        $tahun->tahun = '2020';
        $tahun->save();

       
    }
}
