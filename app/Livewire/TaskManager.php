<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskManager extends Component
{
    public $title;
    public $description;
    public $taskId = null;
    public $tasks;
    public $error = null;

    public function mount()
    {
        $this->loadTasks();
    }

    public function loadTasks()
    {
        try {
            $this->tasks = Task::where('user_id', Auth::id())->latest()->get();
            $this->error = null;
        } catch (\Exception $e) {
            $this->tasks = [];
            $this->error = 'Tasks failed to load.';
        }
    }

    public function create()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => Auth::id(),
        ]);

        $this->reset(['title', 'description']);
        $this->loadTasks();
    }

    public function edit($id)
    {
        $task = Task::where('user_id', Auth::id())->findOrFail($id);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $task = Task::where('user_id', Auth::id())->findOrFail($this->taskId);
        $task->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset(['title', 'description', 'taskId']);
        $this->loadTasks();
    }

    public function delete($id)
    {
        Task::where('user_id', Auth::id())->where('id', $id)->delete();
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
