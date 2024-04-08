<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class BookController extends Controller
{
    // Método para mostrar todos los libros
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    // Método para mostrar el formulario de creación de un nuevo libro
    public function create()
    {
        return view('libros.create');
    }

    // Método para guardar un nuevo libro en la base de datos
    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('libros.index');
    }

    // Método para mostrar un libro específico
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    // Método para mostrar el formulario de edición de un libro
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    // Método para actualizar un libro en la base de datos
    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return redirect()->route('libros.index');
    }

    // Método para eliminar un libro de la base de datos
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index');
    }

    public function confirmDelete($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.delete', compact('libro'));
    }
}
