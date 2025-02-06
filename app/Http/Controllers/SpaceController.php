<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    // Menampilkan halaman home dengan data Space
    public function index()
    {
        $spaces = Space::all();
        return view('home', compact('spaces'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Space::create($validatedData);

        // Redirect ke route 'home' agar data terbaru tampil
        return redirect()->route('home')->with('success', 'Space berhasil ditambahkan!');
    }

    public function show($id)
    {
        $space = Space::findOrFail($id);

        return view('space.show', compact('space'));
    }
}
