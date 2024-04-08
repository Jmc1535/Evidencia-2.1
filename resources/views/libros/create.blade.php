<!-- resources/views/libros/create.blade.php -->

<h1>Agregar Libro</h1>

<form action="{{ route('libros.store') }}" method="post">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required><br>

    <label for="nombre_autor">Nombre del Autor:</label>
    <input type="text" name="nombre_autor" id="nombre_autor" required><br>

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" id="isbn" required><br>

    <label for="año_publicado">Año Publicado:</label>
    <input type="number" name="año_publicado" id="año_publicado" required><br>

    <button type="submit">Guardar</button>
</form>
