<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolePermissions = [
            'admin' => [
                'view-profiles',
                'edit-any-profile',
                'delete-user',
                'ban-user',
                'unban-user',
                'reset-user-password',
                'view-roles',
                'create-role',
                'edit-role',
                'delete-role',
                'assign-role',
                'manage-permissions',
                'view-projects',
                'create-project',
                'edit-any-project',
                'delete-any-project',
                'assign-project',
                'view-tasks',
                'create-task',
                'edit-any-task',
                'delete-any-task',
                'assign-task',
                'complete-task',
                'access-dashboard',
                'manage-settings',
                'view-logs',
                'clear-logs',
                'view-statistics',
                'backup-database',
                'restore-database',
                'send-notifications',
                'manage-comments',
                'moderate-content'
            ],
            'user' => [
                'view-profiles',
                'edit-own-profile',
                'view-projects',
                'create-project',
                'edit-own-project',
                'delete-own-project',
                'view-tasks',
                'create-task',
                'edit-own-task',
                'delete-own-task',
                'complete-task'
            ],
        ];

        // Asignar permisos a cada rol
        foreach ($rolePermissions as $roleSlug => $permissions) {
            $role = Role::where('slug', $roleSlug)->first();

            if ($role) {
                foreach ($permissions as $permissionSlug) {
                    $permission = Permission::where('permission', $permissionSlug)->first();

                    if ($permission) {
                        DB::table('role_permission')->insert([
                            'role_id' => $role->id,
                            'permission_id' => $permission->id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }
            }
        }
    }
}
