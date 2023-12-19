<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\RequestProduto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produtos.index',['produtos'=>\App\Models\Produto::orderBy('asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create',['categorias'=>Categoria::orderBy('asc')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestProduto $request)
    {
        Produto::create($request->all());        
        return redirect(route('produtos.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit',['produto'=>$produto,'categorias'=>Categoria::orderBy('asc')->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestProduto $request, Produto $produto)
    {
        $produto->update($request->all());        
        return redirect(route('produtos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return back();
    }
}