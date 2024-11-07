<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',

        ]);

    }

    public function rund()
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'Admin']);
        $vendorRole = Role::create(['name' => 'Vendor']);
        $userRole = Role::create(['name' => 'User']);

        // Optional: Assign permissions if needed
        // $adminRole->givePermissionTo($permissions);
        // $vendorRole->givePermissionTo($permissions);
        // $userRole->givePermissionTo($permissions);
    }


}
