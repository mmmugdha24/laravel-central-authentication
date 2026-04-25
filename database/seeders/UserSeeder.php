<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Test User',
            'email' => 'user@test.com',
            'password' => 1,
            'organization_id' => Organization::inRandomOrder()->first()->id
        ]);
        User::create([
            'name' => 'Test Admin',
            'email' => 'admin@test.com',
            'password' => 1,
            'organization_id' => Organization::inRandomOrder()->first()->id
        ]);

        User::factory(3)->create();
    }
}
