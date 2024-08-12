<?php
// app/Http/Controllers/DocenteController.php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'foto' => 'nullable|image',
            'cv' => 'nullable|mimes:pdf|max:2048',
            'horarios' => 'required|json',
        ]);

        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->horarios = $request->horarios;

        if ($request->hasFile('foto')) {
            $docente->foto = $request->file('foto')->store('fotos');
        }

        if ($request->hasFile('cv')) {
            $docente->cv = $request->file('cv')->store('cvs');
        }

        $docente->save();

        return redirect()->route('docentes.index');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'foto' => 'nullable|image',
            'cv' => 'nullable|mimes:pdf|max:2048',
            'horarios' => 'required|json',
        ]);

        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->horarios = $request->horarios;

        if ($request->hasFile('foto')) {
            $docente->foto = $request->file('foto')->store('fotos');
        }

        if ($request->hasFile('cv')) {
            $docente->cv = $request->file('cv')->store('cvs');
        }

        $docente->save();

        return redirect()->route('docentes.index');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
