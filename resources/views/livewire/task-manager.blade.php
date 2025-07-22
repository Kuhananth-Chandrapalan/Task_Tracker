<div class="max-w-2xl mx-auto p-4">
    <form wire:submit.prevent="{{ $taskId ? 'update' : 'create' }}" class="space-y-4">
        <input type="text" wire:model="title" placeholder="Task Title" class="w-full border p-2 rounded" />
        <textarea wire:model="description" placeholder="Description" class="w-full border p-2 rounded"></textarea>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            {{ $taskId ? 'Update Task' : 'Create Task' }}
        </button>
    </form>

    <div class="mt-6">
        @if ($error)
            <p class="text-red-600">{{ $error }}</p>
        @else
            @forelse ($tasks as $task)
                <div class="mt-4 p-4 border rounded shadow-sm flex justify-between items-center">
                    <div>
                        <h4 class="text-lg font-semibold">{{ $task->title }}</h4>
                        <p class="text-gray-600">{{ $task->description }}</p>
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="edit({{ $task->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="delete({{ $task->id }})" class="text-red-500 hover:underline">Delete</button>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 mt-4">No tasks available.</p>
            @endforelse
        @endif
    </div>
</div>
