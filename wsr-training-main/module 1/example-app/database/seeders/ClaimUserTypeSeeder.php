<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaimUserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('claim_user_type')->insert([
            [
                'type_name' => 'Обычный',
            ],
            [
                'type_name' => 'Админ',
            ],
        ]);
    }
}
