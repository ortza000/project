<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FastEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fastcourses')->insert([
            [
                    'title' => 'test fast',
                    'start' => '2020-3-5',
                    'end' => '2020-3-6',
                    'color' => '#c40233'
            ],
            [
                'title' => 'test fast2',
                'start' => '2020-3-3',
                'end' => '2020-3-4',
                'color' => '#29fdf2'
        ]
        ]);
    }
}
