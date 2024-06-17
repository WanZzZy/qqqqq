<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'second_name' => 'user',
                'first_name' => 'user',
                'patronymic' => 'user',
                'tel' => '+79151235614',
                'email' => 'user@mail.ru',
                'login' => 'user',
                'password' => bcrypt('password'),
                'type_id' => 1,
            ],
            [
                'second_name' => 'admin',
                'first_name' => 'admin',
                'patronymic' => 'admin',
                'tel' => '+79877774512',
                'email' => 'admin@mail.ru',
                'login' => 'admin',
                'password' => bcrypt('password'),
                'type_id' => 2,
            ],
        ]);
    }
}
