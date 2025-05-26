<div>
    <div class="flex items-center justify-between p-3">
    <h1 class="text-sky-600 text-xl font-bold">Todo Native App</h1>
    <div class="flex items-center space-x-2">
        <a href="#" class="px-2 py-1 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition-colors">
<x-heroicon-s-squares-plus class="w-4 h-4" /></a>
        <a href="#" class="px-2 py-1 bg-sky-600 text-white rounded-lg hover:bg-sky-700 transition-colors">
<x-heroicon-s-cog-8-tooth class="w-4 h-4" />
</a>
    </div>

    </div>
    @forelse ($todos as $todo )
        
    @empty
    <p> Não exites todos, <a href="#" class="text-sky-500"> Click aqui para criar um</a> </p>
        Sem informações<br/>
    @endforelse

</div>
