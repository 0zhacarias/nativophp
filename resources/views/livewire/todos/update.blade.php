<div class="p-3">
<form wire:submit="updateTodo" class="bg-white shadow-md rounded-lg p-6">
    <div>
        <label for="todo-text" class="font-bold mb-1 block">Editar Tarefa:</label>
        <textarea 
        wire:model.lazy="title"
            id="todo-text" 
            name="todo" 
            rows="4" 
            cols="40"
            class="w-full p-3 border-2 border-blue-400 rounded-lg text-base resize-vertical outline-none transition-colors focus:border-blue-700"
            placeholder="Digite sua tarefa aqui..."
        ></textarea>
    </div>
    <div class="text-right mt-4">
        <button 
            type="submit" 
            class="bg-blue-700 text-white border-none px-6 py-2 rounded-md text-base cursor-pointer mr-2 shadow-md transition-colors hover:bg-blue-800"
        >Edit</button>
        <button  wire:navigate href="{{route('todos.index')}}"
            type="reset" 
            class="bg-gray-100 text-gray-700 border border-gray-300 px-6 py-2 rounded-md text-base cursor-pointer shadow-md transition-colors hover:bg-gray-200"
        >Voltar</button>
    </div>
</form>
