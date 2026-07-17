<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Mostrar el listado de categorías.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    /**
     * Mostrar el formulario para registrar una nueva categoría.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Almacenar una nueva categoría en la base de datos.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
        ]);

        Categoria::create($datos);

        return redirect()
            ->route('categorias.index')
            ->with('success', 'La categoría fue registrada correctamente.');
    }

    /**
     * Mostrar la información de una categoría.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Mostrar el formulario para editar una categoría.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Actualizar la información de una categoría.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
        ]);

        $categoria->update($datos);

        return redirect()
            ->route('categorias.index')
            ->with('success', 'La categoría fue actualizada correctamente.');
    }

    /**
     * Eliminar una categoría de la base de datos.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()
            ->route('categorias.index')
            ->with('success', 'La categoría fue eliminada correctamente.');
    }
}

