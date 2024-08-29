<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class insert_records_in_users_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name' => 'abbey',
                'area' => 'area',
                'email' => 'abbey@example.com',
                'password' => bcrypt('1234567')
            ],
            ['name' => 'josh',
            'area' => 'area',
            'email' => 'josh@example.com',
            'password' => bcrypt('1234567')

        ],
        ];
User::insert($users);

    }
}