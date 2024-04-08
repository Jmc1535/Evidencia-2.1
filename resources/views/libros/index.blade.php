<!-- resources/views/libros/index.blade.php -->

<h1>Listado de Libros</h1>

<a href="{{ route('libros.create') }}">Agregar Libro</a>

<ul>
    @foreach($libros as $libro)
        <li>{{ $libro->id }} - {{ $libro->titulo }} - {{ $libro->nombre_autor }}</li>
    @endforeach
</ul>
