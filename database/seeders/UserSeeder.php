<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role2 = Role::create(['name' => 'owner']);
        $role2 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'staff']);
        $role2 = Role::create(['name' => 'general_manager']);

        User::create([
            'name' => 'owner',
            'email' => 'owner@gmail.com',
            'phone' => '0968877203',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('owner');
      
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0968877203',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('admin');
      
        User::create([
            'name' => 'general_manager',
            'email' => 'general_manager@gmail.com',
            'phone' => '0968877203',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('general_manager');
        
        User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'phone' => '0968877203',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('staff');
    }
}
