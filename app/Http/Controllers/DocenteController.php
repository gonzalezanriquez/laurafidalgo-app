<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function publicIndex()
    {
        $docentes = Docente::all();  // O una consulta específica según lo que quieres mostrar

        return view('docentes.public', compact('docentes'));
    }
    public function index()
    {
        // Example of paginating the docentes query
        $docentes = Docente::paginate(10);  // You can change 10 to the number of items per page
        return view('docentes.index', compact('docentes'));
    }

    // Show the form for creating a new docente
    public function create()
    {
        return view('docentes.create');
    }

    // Store a newly created docente in the database
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'nombre' => 'required|string|max:255',
            'disciplina' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate photo file type and size
        ]);

        // Handle the photo upload
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            // Store the photo in the 'photos' folder in the 'public' disk
            $fotoPath = $request->file('foto')->store('photos', 'public');
        }

        // Create the Docente record in the database
        Docente::create([
            'nombre' => $request->input('nombre'),
            'disciplina' => $request->input('disciplina'),
            'foto' => $fotoPath,
        ]);

        // Redirect back to the docentes index with a success message
        return redirect()->route('docentes.index')->with('success', 'Docente creado exitosamente.');
    }

    // Show the form for editing the specified docente
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    // Update the specified docente in the database
    public function update(Request $request, Docente $docente)
    {
        // Validate input data
        $request->validate([
            'nombre' => 'required|string|max:255',
            'disciplina' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validate photo file type and size
        ]);

        // Prepare the data for update
        $data = $request->only(['nombre', 'disciplina']);

        // If a new photo is uploaded, store it
        if ($request->hasFile('foto')) {
            // Store the photo in the 'photos' folder in the 'public' disk
            $data['foto'] = $request->file('foto')->store('photos', 'public');
        }

        // Update the docente record
        $docente->update($data);

        // Redirect back to the docentes index with a success message
        return redirect()->route('docentes.index')->with('success', 'Docente actualizado exitosamente.');
    }

    // Remove the specified docente from the database
    public function destroy(Docente $docente)
    {
        // Delete the docente record
        $docente->delete();

        // Redirect back to the docentes index with a success message
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado exitosamente.');
    }
}
