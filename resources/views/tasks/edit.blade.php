<h1>Editando tarea ID: {{ $task->id }}</h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ $task->name }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Actualizar</button>
</form>

<!-- Formulario de eliminación -->
<form action="/tasks/{{ $task->id }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');" style="margin-top: 10px;">
    @csrf
    @method('DELETE')
    <button type="submit" style="background-color: red; color: white;">Eliminar</button>
</form>
