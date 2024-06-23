<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'position_id' => 3,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('passwordadmin')
            ]
        ])->each(function ($user) {
            User::create($user);
        });

        collect([
            [
                'user_id' => 1,
                'name' => 'Admin SMA N 9 MUKOMUKO'
            ]
        ])->each(function ($user_complements) {
            UserComplement::create($user_complements);
        });
    }
}
