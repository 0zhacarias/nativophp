<div class="m-4">
    <div class="flex items-center justify-between p-3">
        <h1 class="text-sky-600 text-xl font-bold">Todo Native App</h1>
        <div class="flex items-center space-x-2">
            <a href="{{route('todos.create')}}" class="px-2 py-1 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition-colors">
                <x-heroicon-s-squares-plus class="w-4 h-4" /></a>
            <a href="#" class="px-2 py-1 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition-colors">
                <x-heroicon-s-cog-8-tooth class="w-4 h-4" />
            </a>
        </div>

    </div>
    @forelse ($todos as $todo )
    <div wire:key="{{ $todo->id }}"
        class="relative group flex items-center space-x-3 my-4 rounded-lg border border-gray-700 bg-gray-800 px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2">
        <div class="min-w-0 flex-1">
            <span class="absolute inset-0" aria-hidden="true"></span>
            <p class="text-sm font-medium text-gray-200 {{ $todo->completed_at ? 'line-through' : '' }}">{{ $todo->title }}</p>
            <p class="truncate text-sm text-gray-500">{{ $todo->created_at->diffForHumans() }}</p>
        </div>
        <div class="absolute top-0 right-0 my-1 right-1 flex items-center space-x-2">
            <div>
                @if(!$todo->completed_at)
                <button wire:click="complete({{ $todo }})">
                    <x-heroicon-o-check-circle class="w-6 h-6 text-green-400" />
                </button>
                @else
                <x-heroicon-m-check-circle class="w-6 h-6 text-green-400" />
                @endif
            </div>
            @if(!$todo->completed_at)
            <div>
                @if(!$todo->currently_working_on)
                <button wire:click="syncCurrent({{ $todo }})">
                    <x-heroicon-o-star class="w-6 h-6 text-yellow-400" />
                </button>
                @else
                <x-heroicon-m-star class="w-6 h-6 text-yellow-400" />
                @endif
            </div>
            @endif
        </div>
        <div class="absolute bottom-0 right-0 my-2 right-2 flex items-center space-x-2">
            <button wire:click="delete({{ $todo }})">
                <x-heroicon-m-trash class="w-4 h-4 text-gray-800 group-hover:text-red-600" />
            </button>
            @if(!$todo->completed_at)
            <a wire:navigate href="{{ route('todos.edit', ['todo' => $todo]) }}">
                <x-heroicon-m-pencil class="w-4 h-4 text-gray-800 group-hover:text-sky-500" />
            </a>
            @endif
        </div>
    </div>
    @empty
    <div class="mt-6">

        <p> Não exites todos, <a href="{{route('todos.create')}}" class="text-sky-500"> Click aqui para criar um</a> </p>
        Sem informações<br />
    </div>
    @endforelse

</div>