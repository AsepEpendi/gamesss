<?php

use App\Module;
use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengguna
        $modulePengguna = Module::create([
            'name' => 'Module Pengguna'
        ]);

        $permissionPengguna = [
            [
                'name' => 'manage-pengguna',
                'display_name' => 'Manage Pengguna',
                'description' => 'Bisa Memanage Pengguna'
            ],
            [
                'name' => 'edit-pengguna',
                'display_name' => 'Edit Pengguna',
                'description' => 'Bisa Mengubah Pengguna'
            ],
            [
                'name' => 'create-pengguna',
                'display_name' => 'Create Pengguna',
                'description' => 'Bisa Menambah Pengguna'
            ],
            [
                'name' => 'reset-password',
                'display_name' => 'Reset Password',
                'description' => 'Bisa Mereset Password'
            ],
            [
                'name' => 'reset-account',
                'display_name' => 'Reset Account',
                'description' => 'Bisa Mereset Account'
            ],
        ];

        foreach ($permissionPengguna as $key){
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $modulePengguna->id
            ]);
        }

        // Role
        $moduleRole = Module::create([
            'name' => 'Module Role'
        ]);

        $permissionModuleRole = [
            [
                'name' => 'manage-role',
                'display_name' => 'Manage Role',
                'description' => 'Bisa Memanage Role'
            ],
            [
                'name' => 'create-role',
                'display_name' => 'Create Role',
                'description' => 'Bisa Membuat Role'
            ],
            [
                'name' => 'edit-role',
                'display_name' => 'Edit Role',
                'description' => 'Bisa Mengedit Role'
            ]
        ];

        foreach ($permissionModuleRole as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $moduleRole->id
            ]);
        }

        // Permission
        $modulePermissions = Module::create([
            'name' => 'Module Permission'
        ]);

        $permissionModulePermissions = [
            [
                'name' => 'manage-permissions',
                'display_name' => 'Manage Permissions',
                'description' => 'Bisa Memanage Permissions'
            ],
            [
                'name' => 'create-permissions',
                'display_name' => 'Create Permissions',
                'description' => 'Bisa Membuat Permissions'
            ],
            [
                'name' => 'edit-permissions',
                'display_name' => 'Edit Permissions',
                'description' => 'Bisa Mengedit Permissions'
            ]
        ];

        foreach ($permissionModulePermissions as $key) {
            # code...
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $modulePermissions->id
            ]);
        }

         // Module
         $module = Module::create([
            'name' => 'Module'
        ]);

        $permissionModule = [
            [
                'name' => 'manage-module',
                'display_name' => 'Manage Module',
                'description' => 'Bisa Memanage Module'
            ],
            [
                'name' => 'create-module',
                'display_name' => 'Create Module',
                'description' => 'Bisa Membuat Module'
            ],
            [
                'name' => 'edit-module',
                'display_name' => 'Edit Module',
                'description' => 'Bisa Mengedit Module'
            ],
            [
                'name' => 'delete-module',
                'display_name' => 'Delete Module',
                'description' => 'Bisa Menghapus Module'
            ]
        ];

        foreach ($permissionModule as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $module->id
            ]);
        }

        // pengaturan
        $modulePengaturan = Module::create([
            'name' => 'Module Pengaturan'
        ]);

        $permissionModulePengaturan = [
            [
                'name' => 'manage-pengaturan',
                'display_name' => 'Manage Pengaturan',
                'description' => 'Bisa Memanage Pengaturan'
            ],
            [
                'name' => 'create-pengaturan',
                'display_name' => 'Create Pengaturan',
                'description' => 'Bisa Membuat Pengaturan'
            ],
            [
                'name' => 'edit-pengaturan',
                'display_name' => 'Edit Pengaturan',
                'description' => 'Bisa Mengedit Pengaturan'
            ]
        ];

        foreach ($permissionModulePengaturan as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $modulePengaturan->id
            ]);
        }
    }
}
