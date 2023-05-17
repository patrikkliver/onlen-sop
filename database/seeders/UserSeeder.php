<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Patrik Oroh',
            'email' => 'patrikoroh@example.com',
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'is_admin' => false
        ]);

        User::factory(10)->create();
    }
}
