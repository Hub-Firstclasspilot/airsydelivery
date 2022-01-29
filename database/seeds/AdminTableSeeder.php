<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Cheerful User",
            "email" => "cheerfuluser@gmail.com",
            "password" => Hash::make("CheerfulPassword"),
            "email_verified_at" => now()
        ]);

        $user->assignRole('user');

        $admin = User::create([
            "name" => "ADC Administrator",
            "email" => "dispatch@airsydelivery.com",
            "password" => Hash::make("PasKPDAhLF6dM"),
            "email_verified_at" => now()
        ]);

        $admin->assignRole('admin');
    }
}
