<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaimStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('claim_status')->insert([
            [
                'caption' => 'Новое',
            ],
            [
                'caption' => 'Подтверждено',
            ],
            [
                'caption' => 'Отклонено',
            ],
        ]);
    }
}
