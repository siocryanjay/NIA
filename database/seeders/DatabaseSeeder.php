<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'id' => '04012022',
            'name' => 'ADMIN',
<<<<<<< HEAD
=======
            'username' => 'admin',
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin2022'),
        ]);
    }
}
