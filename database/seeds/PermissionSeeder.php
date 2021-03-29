<?php

use App\Module;
use Laratrust\Models\LaratrustPermission as Permission;
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

        // Email
        $moduleEmail = Module::create([
            'name' => 'Module Email'
        ]);

        $permissionModuleEmail = [
            [
                'name' => 'manage-email',
                'display_name' => 'Manage Email',
                'description' => 'Bisa Memanage Email'
            ],
            [
                'name' => 'create-email',
                'display_name' => 'Create Email',
                'description' => 'Bisa Membuat Email'
            ],
            [
                'name' => 'edit-email',
                'display_name' => 'Edit Email',
                'description' => 'Bisa Mengedit Email'
            ]
        ];

        foreach ($permissionModuleEmail as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $moduleEmail->id
            ]);
        }

        // Banner
        $moduleBanner = Module::create([
            'name' => 'Module Banner'
        ]);

        $permissionModuleBanner = [
            [
                'name' => 'manage-banner',
                'display_name' => 'Manage Banner',
                'description' => 'Bisa Memanage Banner'
            ],
            [
                'name' => 'create-banner',
                'display_name' => 'Create Banner',
                'description' => 'Bisa Membuat Banner'
            ],
            [
                'name' => 'edit-banner',
                'display_name' => 'Edit Banner',
                'description' => 'Bisa Mengedit Banner'
            ],
            [
                'name' => 'delete-banner',
                'display_name' => 'Delete Banner',
                'description' => 'Bisa Menghapus Banner'
            ]
        ];

        foreach ($permissionModuleBanner as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $moduleBanner->id
            ]);
        }

        // Post
        $modulePost = Module::create([
            'name' => 'Module Post'
        ]);

        $permissionModulePost = [
            [
                'name' => 'manage-post',
                'display_name' => 'Manage Post',
                'description' => 'Bisa Memanage Post'
            ],
            [
                'name' => 'create-post',
                'display_name' => 'Create Post',
                'description' => 'Bisa Membuat Post'
            ],
            [
                'name' => 'edit-post',
                'display_name' => 'Edit Post',
                'description' => 'Bisa Mengedit Post'
            ],
            [
                'name' => 'delete-post',
                'display_name' => 'Delete Post',
                'description' => 'Bisa Menghapus Post'
            ]
        ];

        foreach ($permissionModulePost as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $modulePost->id
            ]);
        }

        // Category
        $moduleCategory = Module::create([
            'name' => 'Module Category'
        ]);

        $permissionModuleCategory = [
            [
                'name' => 'manage-category',
                'display_name' => 'Manage Kategori',
                'description' => 'Bisa Memanage Kategori'
            ],
            [
                'name' => 'create-category',
                'display_name' => 'Create Kategori',
                'description' => 'Bisa Membuat Kategori'
            ],
            [
                'name' => 'edit-category',
                'display_name' => 'Edit Kategori',
                'description' => 'Bisa Mengedit Kategori'
            ],
            [
                'name' => 'delete-category',
                'display_name' => 'Delete Kategori',
                'description' => 'Bisa Menghapus Kategori'
            ]
        ];

        foreach ($permissionModuleCategory as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $moduleCategory->id
            ]);
        }

        // Tags
        $moduleTags = Module::create([
            'name' => 'Module Tags'
        ]);

        $permissionModuleTags = [
            [
                'name' => 'manage-tags',
                'display_name' => 'Manage Tags',
                'description' => 'Bisa Memanage Tags'
            ],
            [
                'name' => 'create-tags',
                'display_name' => 'Create Tags',
                'description' => 'Bisa Membuat Tags'
            ],
            [
                'name' => 'edit-tags',
                'display_name' => 'Edit Tags',
                'description' => 'Bisa Mengedit Tags'
            ],
            [
                'name' => 'delete-tags',
                'display_name' => 'Delete Tags',
                'description' => 'Bisa Menghapus Tags'
            ]
        ];

        foreach ($permissionModuleTags as $key) {
            Permission::create([
                'name' => $key['name'],
                'display_name' => $key['display_name'],
                'description' => $key['description'],
                'module_id' => $moduleTags->id
            ]);
        }
    }
}
