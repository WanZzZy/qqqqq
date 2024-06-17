<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_table')->insert([
        [
            'caption' => 'my caption',
            'big_text' => 'my big text',
            'my_date' => now(),
        ],
        [
            'caption' => 'my caption',
            'big_text' => 'my big text',
            'my_date' => now(),
        ],
    ]);
    }
}
