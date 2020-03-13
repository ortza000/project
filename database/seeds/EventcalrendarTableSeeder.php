<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventcalrendarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('eventcalendars')->insert([
            [
                    'title' => 'กิจกรรมรับน้อง',
                    'start' => '2020-3-5 08:30:00',
                    'end' => '2020-3-6 13:00:00',
                    'color' => '#c40233',
                    'description' => 'กิจกรรมนี้รับน้องปี 1 ที่พึ่งเข้ามายันมหาวิทยาลัย'
            ],
            [
                'title' => 'คอมพิวเตอร์เสริมทักษะ',
                'start' => '2020-3-11',
                'end' => '2020-3-14',
                'color' => '#29fdf2',
                'description' => 'คอมพิวเตอร์เสริมทักษะ ปี 1'
        ]



       ]);
    }
}
