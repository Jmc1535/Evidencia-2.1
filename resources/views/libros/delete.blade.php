<!-- resources/views/libros/delete.blade.php -->

<h1>Eliminar Libro</h1>

<form id="form-eliminar-libro" action="{{ route('libros.destroy', $libro->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Confirmar Eliminación</button>
</form>
