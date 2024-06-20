<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    @foreach ($tasks as $task)
        <li>
         <a href="/tasks/{{ $task->id}}">{{ $task->name }}</a> <button>Completar</button>  
        </li>
        
    @endforeach
</ul>