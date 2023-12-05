<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Requests\StoreProduitRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produit::create($request -> all());
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produit=Produit::find($id);
        return view("show", compact('produit'));
        
    }
    public function edit($id)
    {
        $produit=Produit::find($id);
        return view("edit", compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produit=Produit::find($id);
        $produit->update($request->all());
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produit=Produit::find($id);
        $produit -> delete();
        return redirect()->route('produits.index');
    }
}


