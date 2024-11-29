<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clases;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clases = Clases::all(); 

        return view('clases.index', compact('clases'));
    }

    public function publicIndex()
    {
        $clases_ninos = Clases::where('categoria', 'niños')->get();
        $clases_adultos = Clases::where('categoria', 'adultos y adolescentes')->get();
        
        return view('clases.public', compact('clases_ninos', 'clases_adultos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación incluyendo 'categoria'
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'docente' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'categoria' => 'required|string|in:niños,adultos y adolescentes', 
        ]);
        // Crear la clase con la nueva categoría
        Clases::create($validated);
      


        // Redirigir con mensaje de éxito
        return redirect()->route('clases.index')->with('success', 'Clase creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar la clase por ID
        $clase = Clases::findOrFail($id);
        
        // Mostrar los detalles de la clase
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar la clase por ID
        $clase = Clases::findOrFail($id);

        // Mostrar el formulario de edición
        return view('clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validación incluyendo 'categoria'
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'docente' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'categoria' => 'required|string|in:niños,adultos y adolescentes', // Validación para 'categoria'
        ]);

        // Buscar la clase por ID y actualizarla
        $clase = Clases::findOrFail($id);
        $clase->update($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('clases.index')->with('success', 'Clase actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar la clase por ID y eliminarla
        $clase = Clases::findOrFail($id);
        $clase->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('clases.index')->with('success', 'Clase eliminada correctamente.');
    }
}
