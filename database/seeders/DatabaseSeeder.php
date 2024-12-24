<?php

namespace Database\Seeders;

use Database\Seeders\GroupSeeder;
use Database\Seeders\RoomSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\TeacherSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
        GroupSeeder::class,
        RoomSeeder::class,
        TeacherSeeder::class,
    ]);
    $adminEmail = 'admin@example.com';
    $adminPassword = 'adminpassword'; // You should use a secure password hashing method
    DB::table('users')->insert([
        'name' => 'Admin User',
        'email' => $adminEmail,
        'password' => Hash::make($adminPassword),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
