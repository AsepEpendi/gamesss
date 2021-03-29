<?php

use App\RoleUser;
use Illuminate\Database\Seeder;
use App\User;
use Laratrust\Models\LaratrustPermission as Permission;
use Laratrust\Models\LaratrustRole as Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role Admin
        Role::create([
            'name' => 'administrator',
            'display_name' => 'Administrator',
            'description' => 'Ini adalah role Admin'
        ]);

        $adminRole = Role::where('name', 'administrator')->first();
        $adminPermission = [
            'manage-pengguna',
            'edit-pengguna',
            'create-pengguna',
            'reset-password',
            'reset-account',
            'manage-role',
            'create-role',
            'edit-role',
            'manage-permissions',
            'create-permissions',
            'edit-permissions',
            'manage-module',
            'create-module',
            'edit-module',
            'delete-module',
            'manage-pengaturan',
            'create-pengaturan',
            'edit-pengaturan',
            'manage-email',
            'create-email',
            'edit-email',
            'manage-banner',
            'create-banner',
            'edit-banner',
            'delete-banner',
            'manage-post',
            'create-post',
            'edit-post',
            'delete-post',
            'manage-category',
            'create-category',
            'edit-category',
            'delete-category',
            'manage-tags',
            'create-tags',
            'edit-tags',
            'delete-tags'
        ];

        // User Admin
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        foreach ($adminPermission as $ap) {
            # code...
            $permission = Permission::where('name', $ap)->first();
            $adminRole->attachPermission($permission->id);
        }

        $admin->attachRole($adminRole);

        // User Biasa
        // $user = User::create([
        //     'name' => 'User',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('rahasia')
        // ]);

        // foreach ($adminPermission as $ap) {
        //     # code...
        //     $permission = Permission::where('name', $ap)->first();
        //     $adminRole->attachPermission($permission->id);
        // }

        // $user->attachRole($adminRole);
    }
}
