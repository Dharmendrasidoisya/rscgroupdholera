<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [ 
            'name' => 'Admin',
            'email' => 'adsindia@gmail.com',
            'password' => bcrypt('adsindia@123')
        ];
        Admin::create($admin);
    }
}
