<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categorias.index',['categorias'=>\App\Models\Categoria::orderBy('nome','asc')->simplePaginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCategoria $request)
    {
        Categoria::create($request->all());        
        return back();
        // return redirect(route('categorias.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestCategoria $request, Categoria $categoria)
    {
        $categoria->update($request->all());        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return back();
    }
}
