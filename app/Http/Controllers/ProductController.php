<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id', 'desc')->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([

            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
            'description' => $request->description
        ]);
        return redirect()->to('product')->with('message', 'Produk berhasil di tambah');
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
        $edit = Product::findOrFail($id);
        $categories = Category::get();
        return view('product.edit', compact('edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Product::findOrFail($id);
        $edit->update([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
            'description' => $request->description,
        ]);
        return redirect()->to('product')->with('message', 'Produk berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Product::findOrFail($id);
        $destroy->delete();
        return redirect()->to('product')->with('info', 'Wes di Hapus cokkk');
    }
}
