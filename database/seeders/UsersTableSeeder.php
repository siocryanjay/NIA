<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '04012022',
            'name' => 'ADMIN',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin2022'),
        ]);
    }
}
