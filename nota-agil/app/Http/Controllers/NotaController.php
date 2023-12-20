<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('notas.index', ['notas' => \App\Models\Nota::simplePaginate(8)]);
    }

    public function download(Nota $nota)
    {
        $data['nota'] = $nota;//pegando dados
        $pdf = Pdf::loadView('nota',$data);//passando o documento html junto com dados
        $name='nota_'.$nota->id.'.pdf';
        return $pdf->download($name);//baixando o pdf na hora 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        return view('notas.show', ['nota' => $nota]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        return view('notas.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
        return redirect('/notas');
    }
}
