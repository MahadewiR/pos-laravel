<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('id', 'desc')->get();

        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
            'category_name' => $request->category_name

        ]);
        return redirect()->to('category')->with('message', 'Category already insert');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Category::findOrFail($id);
        return view('category.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Category::findOrFail($id);
        $edit->update([

            'category_name' => $request->category_name,

        ]);
        return redirect()->to('category')->with('message', 'Category already updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Category::findOrFail($id);
        $destroy->delete();
        return redirect()->to('category')->with('info', 'Category already deleted');
    }
}
