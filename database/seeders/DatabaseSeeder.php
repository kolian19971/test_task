<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public const ADMIN_PASSWORD = "12345678";

    public function run(){
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.ua',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt(self::ADMIN_PASSWORD),
            'remember_token' => Str::random(10),
        ]);
    }
}
