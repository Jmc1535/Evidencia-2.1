<!-- resources/views/libros/edit.blade.php -->

<h1>Editar Libro</h1>

<form action="{{ route('libros.update', $libro->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" required><br>

    <label for="nombre_autor">Nombre del Autor:</label>
    <input type="text" name="nombre_autor" id="nombre_autor" value="{{ $libro->nombre_autor }}" required><br>

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" required><br>

    <label for="año_publicado">Año Publicado:</label>
    <input type="number" name="año_publicado" id="año_publicado" value="{{ $libro->año_publicado }}" required><br>

    <button type="submit">Actualizar</button>
</form>
