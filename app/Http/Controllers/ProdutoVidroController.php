<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoVidro;

class ProdutoVidroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = ProdutoVidro::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProdutoVidro::create($request->all());

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProdutoVidro $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdutoVidro $produto)
    {
    return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, ProdutoVidro $produto)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'tipo' => 'required|string|max:255',
        'espessura' => 'required|numeric',
        'preco' => 'required|numeric',
    ]);

    $produto->update($request->all());

    return redirect()->route('produtos.index')
                     ->with('success', 'Produto atualizado com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdutoVidro $produto)
    {

    $produto->delete();

    return redirect()->route('produtos.index')
                     ->with('success', 'Produto deletado com sucesso!');
    }
}
