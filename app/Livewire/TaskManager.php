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
    public $error = null;

    protected $rules = [
        'title' => 'required|string',
        'description' => 'nullable|string',
    ];

    public function mount()
    {
        $this->loadTasks();
    }

    public function loadTasks()
    {
        try {
            $this->tasks = Task::where('user_id', Auth::id())
                ->orderBy('created_at', 'asc')
                ->get();
            $this->error = null;
        } catch (\Exception $e) {
            $this->tasks = [];
            $this->error = 'Tasks failed to load.';
        }
    }

    public function create()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => Auth::id(),
            'completed' => $this->completed,
        ]);

        $this->resetForm();
        $this->loadTasks();
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
        $this->validate();

        $task = Task::where('user_id', Auth::id())->findOrFail($this->taskId);
        $task->update([
            'title' => $this->title,
            'description' => $this->description,
            'completed' => $this->completed,
        ]);

        $this->resetForm();
        $this->loadTasks();
    }

    public function delete($id)
    {
        Task::where('user_id', Auth::id())
            ->where('id', $id)
            ->delete();

        $this->loadTasks();
    }

    public function toggleCompleted($id)
    {
        $task = Task::where('user_id', Auth::id())->findOrFail($id);
        $task->completed = !$task->completed;
        $task->save();

        $this->loadTasks();
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->reset(['title', 'description', 'completed', 'taskId']);
    }

    public function getCompletedCountProperty()
    {
        return $this->tasks->where('completed', true)->count();
    }

    public function getTotalCountProperty()
    {
        return $this->tasks->count();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
