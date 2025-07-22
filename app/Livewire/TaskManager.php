<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskManager extends Component
{
    public $title;
    public $description;
    public $completed = false;
    public $taskId = null;
    public $tasks = [];
    public $filter = 'all';


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
            'completed' => $this->completed,
        ]);

        $this->reset(['title', 'description', 'completed']);
        $this->loadTasks();

        $this->dispatch('taskNotify', type: 'success', message: 'Task created successfully!');

    }

    public function mount()
    {
        $this->loadTasks();
    }

    public function applyFilter()
    {
        $this->loadTasks();
    }

    public function loadTasks()
    {
        $query = Task::where('user_id', Auth::id());

        if ($this->filter === 'completed') {
            $query->where('completed', true);
        } elseif ($this->filter === 'not_completed') {
            $query->where('completed', false);
        }

        $this->tasks = $query->orderBy('created_at', 'asc')->get();
    }

    

    public function edit($id)
    {
        $task = Task::where('user_id', Auth::id())->findOrFail($id);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->completed = $task->completed;
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
            'completed' => $this->completed,
        ]);

        $this->reset(['title', 'description', 'taskId', 'completed']);
        $this->loadTasks();

        $this->dispatch('taskNotify', type: 'info', message: 'Task updated successfully!');
    }

    public function delete($id)
    {
        Task::where('user_id', Auth::id())->where('id', $id)->delete();
        $this->loadTasks();
    }

    public function toggleCompleted($id)
    {
        $task = Task::where('user_id', Auth::id())->findOrFail($id);
        $task->completed = !$task->completed;
        $task->save();
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
