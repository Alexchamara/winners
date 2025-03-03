<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role
        Role::create([
            'name' => 'admin',
            'description' => 'Administrator with full access'
        ]);

        // Create merchant role
        Role::create([
            'name' => 'merchant',
            'description' => 'Merchant with business privileges'
        ]);

        // Create player role
        Role::create([
            'name' => 'player',
            'description' => 'Regular player account'
        ]);
    }
}
