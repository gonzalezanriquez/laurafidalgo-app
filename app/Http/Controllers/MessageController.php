<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->all());

        return response()->json(['success' => 'Tu mensaje se ha enviado correctamente.']);


        // return redirect()->back()->with('success', 'Tu mensaje ha sido enviado exitosamente.');
    }

    public function index()
    {
        $messages = Message::latest()->paginate(10); // Paginación de 10 mensajes por página
        return view('messages.index', compact('messages'));
    }

    public function show(Message $message)
{
    return view('messages.show', compact('message'));
}

public function destroy(Message $message)
{
    $message->delete();

    return redirect()->route('messages.index')->with('success', 'El mensaje ha sido eliminado exitosamente.');
}

}
