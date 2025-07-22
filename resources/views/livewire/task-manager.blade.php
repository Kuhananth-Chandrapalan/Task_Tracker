<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-xl">
    <h2 class="text-2xl font-semibold flex items-center gap-2 mb-6">
        📝 Task Dashboard
    </h2>

    <!-- Filter Dropdown and Icon Button -->
    <div class="flex items-center gap-3 mb-4">
        <select wire:model.defer="filter" class="border border-gray-300 rounded-lg px-3 py-2">
            <option value="all">All Tasks</option>
            <option value="completed">Completed</option>
            <option value="not_completed">Not Completed</option>
        </select>
        <button 
            wire:click="applyFilter"
            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded"
            title="Apply Filter"
        >
            🔍
        </button>
    </div>

    <!-- Task Form -->
    <form wire:submit.prevent="{{ $taskId ? 'update' : 'create' }}" class="space-y-4 mb-8">
        <input 
            type="text" 
            wire:model="title" 
            placeholder="Enter Task Title" 
            class="w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 p-3 rounded-lg"
        />
        <textarea 
            wire:model="description" 
            placeholder="Enter Task Description" 
            class="w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 p-3 rounded-lg"
        ></textarea>

        <button 
            type="submit" 
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow font-semibold transition"
        >
            {{ $taskId ? 'Update Task' : 'Create Task' }}
        </button>
    </form>

    <!-- Task List -->
    <div class="grid grid-cols-1 gap-4">
        @forelse ($tasks as $index => $task)
            <div class="p-4 rounded-lg border shadow transition duration-300 cursor-pointer 
                {{ $task->completed ? 'bg-green-100 border-green-400 hover:bg-green-200' : 'bg-gray-100 border-gray-300 hover:bg-gray-200' }}">

                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-semibold {{ $task->completed ? 'text-green-800' : 'text-gray-700' }}">
                        Task {{ $index + 1 }}
                    </span>
                    <div class="flex gap-2 text-sm">
                        <button 
                            wire:click="edit({{ $task->id }})"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-3 py-1 rounded transition duration-150"
                        >
                            Edit
                        </button>
                        <button 
                            wire:click="delete({{ $task->id }})"
                            class="bg-red-600 hover:bg-red-700 text-white font-semibold px-3 py-1 rounded transition duration-150"
                        >
                            Delete
                        </button>
                    </div>
                </div>

                <h3 class="text-lg font-semibold text-gray-900">{{ $task->title }}</h3>
                <p class="text-sm text-gray-700 mb-2">{{ $task->description }}</p>

                <label class="inline-flex items-center gap-2">
                    <input 
                        type="checkbox" 
                        wire:change="toggleCompleted({{ $task->id }})" 
                        class="form-checkbox text-green-600"
                        {{ $task->completed ? 'checked' : '' }}
                    >
                    <span class="{{ $task->completed ? 'text-green-800 font-semibold' : 'text-gray-600' }}">
                        {{ $task->completed ? 'Completed' : 'Mark as Completed' }}
                    </span>
                </label>
            </div>
        @empty
            <p class="text-gray-500">No tasks found.</p>
        @endforelse
    </div>

    <!-- Toast Notification Script -->
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('taskNotify', ({ type, message }) => {
            console.log("🔥 Notification received:", type, message);

            const toast = document.createElement('div');

            toast.textContent = message;
            toast.style.position = 'fixed';
            toast.style.bottom = '20px';
            toast.style.right = '20px';
            toast.style.padding = '16px 24px';
            toast.style.backgroundColor = type === 'success' ? '#22c55e' : '#3b82f6';
            toast.style.color = '#fff';
            toast.style.fontWeight = 'bold';
            toast.style.borderRadius = '8px';
            toast.style.boxShadow = '0 4px 10px rgba(0,0,0,0.2)';
            toast.style.zIndex = '99999';
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.4s ease';

            document.body.appendChild(toast);

            // Force visible
            requestAnimationFrame(() => {
                toast.style.opacity = '1';
            });

            // Auto-remove
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        });
    });
</script>

</div>
