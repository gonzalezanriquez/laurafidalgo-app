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
        $clases = Clases::all();  // O una consulta específica según lo que quieres mostrar

        return view('clases.public', compact('clases'));
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
        // Validate the form data
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'docente' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
        ]);

        // Create a new class record
        Clases::create($validated);
      
        // Redirect to index with success message
        return redirect()->route('clases.index')->with('success', 'Clase creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the class by ID
        $clase = Clases::findOrFail($id);
        
        // Show the specific class details
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the class by ID
        $clase = Clases::findOrFail($id);

        // Show the edit form
        return view('clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'docente' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
        ]);

        // Find the class by ID and update
        $clase = Clases::findOrFail($id);
        $clase->update($validated);

        // Redirect to index with success message
        return redirect()->route('clases.index')->with('success', 'Clase actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the class by ID and delete
        $clase = Clases::findOrFail($id);
        $clase->delete();

        // Redirect to index with success message
        return redirect()->route('clases.index')->with('success', 'Clase eliminada correctamente.');
    }
}
