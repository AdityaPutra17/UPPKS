<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::all();
        $kategori = Kategori::all();
        return view('product.index', compact('products', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        return view('product.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // ddd($request);
        $request->validate([
            'product_name' => 'required',
            'id_kategori' => 'required|exists:kategoris,id',
            'owner' => 'required',
            'price' => 'required',
            'url' => 'required',
            'desc' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = null;

        if($request->hasFile('image')){
            $image = $request->file('image')->store('img_product');
        }

        Products::create([
            'product_name' => $request->product_name,
            'id_kategori' => $request->id_kategori,
            'owner' => $request->owner,
            'price' => $request->price,
            'url' => $request->url,
            'desc' => $request->desc,
            'contact' => $request->contact,
            'image' => $image,
        ]);
        return redirect()->route('product.index')->with('success', "berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $product = Products::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $product = Products::findOrFail($id);
        $kategori = Kategori::all();
        return view('product.edit', compact('product' , 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'product_name' => 'required',
            'id_kategori' => 'required|exists:kategoris,id',
            'owner' => 'required',
            'price' => 'required',
            'url' => 'required',
            'desc' => 'required',
            'contact' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $product->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('img_product');
        }

        $product->update([
            'product_name' => $request->product_name,
            'id_kategori' => $request->id_kategori,
            'owner' => $request->owner,
            'price' => $request->price,
            'url' => $request->url,
            'desc' => $request->desc,
            'contact' => $request->contact,
            'image' => $image,
        ]);

        return redirect()->route('product.index')->with('success', "berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect()->route('product.index')->with('success', 'produk telah dihapus');
    }
}
