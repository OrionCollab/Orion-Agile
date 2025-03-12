<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogResource;
use App\Models\Log;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $taskCount = Task::where('user_id', Auth::id())->count();
        $highPriorityTasks = Task::where('user_id', Auth::id())->where('priority', 1)->count();

        $logs = LogResource::collection(Log::where('user_id', Auth::id())->take(10)->get())->toArray(request());

        return Inertia::render(
            'Home',
            [
                'taskCount' => $taskCount,
                'highPriorityTasks' => $highPriorityTasks,
                'logs' => $logs
            ]
        );
    }

    public function createTask()
    {
        return Inertia::render('tasks/Create');
    }

    public function newTask(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'priority' => 'required|integer|min:1|max:3',
            'status' => 'required|in:pending,in_progress,completed',
        ], [
            'title.required' => 'El título es requerido',
            'title.string' => 'El título debe ser una cadena de texto',
            'title.max' => 'El título debe tener menos de 255 caracteres',
            'description.string' => 'La descripción debe ser una cadena de texto',
            'description.max' => 'La descripción debe tener menos de 500 caracteres',
            'priority.required' => 'La prioridad es requerida',
            'priority.integer' => 'La prioridad debe ser un número',
            'priority.min' => 'La prioridad debe ser un número entre 1 y 3',
            'priority.max' => 'La prioridad debe ser un número entre 1 y 3',
            'status.required' => 'El estado es requerido',
            'status.in' => 'El estado debe ser uno de los siguientes: Pendiente, En progreso, Completada',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => $request->status,
        ]);

        Log::create([
            'user_id' => Auth::id(),
            'action' => "Nueva tarea creada",
            'type' => 'success',
        ]);

        return to_route('home');
    }
}
