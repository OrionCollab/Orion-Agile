<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // 🔹 Usuarios y Perfiles
            ['permission' => 'view-profiles', 'description' => 'Ver perfiles de usuario'],
            ['permission' => 'edit-own-profile', 'description' => 'Editar su propio perfil'],
            ['permission' => 'edit-any-profile', 'description' => 'Editar perfiles de otros usuarios (admin)'],
            ['permission' => 'delete-user', 'description' => 'Eliminar usuarios del sistema'],
            ['permission' => 'ban-user', 'description' => 'Banear usuarios del sistema'],
            ['permission' => 'unban-user', 'description' => 'Desbanear usuarios'],
            ['permission' => 'reset-user-password', 'description' => 'Restablecer la contraseña de un usuario'],

            // 🔹 Roles y Permisos
            ['permission' => 'view-roles', 'description' => 'Ver la lista de roles disponibles'],
            ['permission' => 'create-role', 'description' => 'Crear nuevos roles en el sistema'],
            ['permission' => 'edit-role', 'description' => 'Editar roles existentes'],
            ['permission' => 'delete-role', 'description' => 'Eliminar roles del sistema'],
            ['permission' => 'assign-role', 'description' => 'Asignar roles a usuarios'],
            ['permission' => 'manage-permissions', 'description' => 'Gestionar permisos de los roles'],

            // 🔹 Proyectos
            ['permission' => 'view-projects', 'description' => 'Ver la lista de proyectos'],
            ['permission' => 'create-project', 'description' => 'Crear un nuevo proyecto'],
            ['permission' => 'edit-own-project', 'description' => 'Editar proyectos que creó el usuario'],
            ['permission' => 'edit-any-project', 'description' => 'Editar cualquier proyecto (admin)'],
            ['permission' => 'delete-own-project', 'description' => 'Eliminar sus propios proyectos'],
            ['permission' => 'delete-any-project', 'description' => 'Eliminar cualquier proyecto (admin)'],
            ['permission' => 'assign-project', 'description' => 'Asignar proyectos a otros usuarios'],

            // 🔹 Tareas
            ['permission' => 'view-tasks', 'description' => 'Ver todas las tareas en un proyecto'],
            ['permission' => 'create-task', 'description' => 'Crear tareas dentro de un proyecto'],
            ['permission' => 'edit-own-task', 'description' => 'Editar sus propias tareas'],
            ['permission' => 'edit-any-task', 'description' => 'Editar cualquier tarea (admin)'],
            ['permission' => 'delete-own-task', 'description' => 'Eliminar sus propias tareas'],
            ['permission' => 'delete-any-task', 'description' => 'Eliminar cualquier tarea (admin)'],
            ['permission' => 'assign-task', 'description' => 'Asignar tareas a otros usuarios'],
            ['permission' => 'complete-task', 'description' => 'Marcar una tarea como completada'],

            // 🔹 Administración
            ['permission' => 'access-dashboard', 'description' => 'Acceder al panel de administración'],
            ['permission' => 'manage-settings', 'description' => 'Modificar la configuración general del sistema'],
            ['permission' => 'view-logs', 'description' => 'Ver registros de actividad del sistema'],
            ['permission' => 'clear-logs', 'description' => 'Limpiar registros de actividad'],
            ['permission' => 'view-statistics', 'description' => 'Ver estadísticas del sistema'],
            ['permission' => 'backup-database', 'description' => 'Realizar copias de seguridad de la base de datos'],
            ['permission' => 'restore-database', 'description' => 'Restaurar una copia de seguridad'],

            // 🔹 Otras Acciones
            ['permission' => 'send-notifications', 'description' => 'Enviar notificaciones a usuarios'],
            ['permission' => 'manage-comments', 'description' => 'Gestionar y moderar comentarios en el sistema'],
            ['permission' => 'moderate-content', 'description' => 'Moderar contenido subido por los usuarios'],
        ];


        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
