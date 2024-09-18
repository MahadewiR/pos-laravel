<?php

namespace App\Http\Controllers;

use Monolog\Level;
use App\Models\Levels;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Levels::all();
        return view('level.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'level_nama' => 'required',
        ]);
        Levels::create($request->all());
        return redirect()->route('level.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Levels $levels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $edit = Levels::findOrFail($id);
        return view('level.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $levels = Levels::findOrFail($id);
        $request->validate([
            'level_nama' => 'required',
        ]);
        $levels->update($request->all());
        return redirect()->route('level.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Levels::where('id', $id)->delete();
        return redirect()->route('level.index')->with('success', 'Data Berhasil Dihapus');
    }
}
