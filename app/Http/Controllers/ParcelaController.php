<?php

namespace App\Http\Controllers;

use App\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcelas = Parcela::all();
        return view('parcelas.index', ['parcelas' => $parcelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parcelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parcela = new Parcela;
        $parcela->nombre = $request->nombre;
        $parcela->altura = $request->altura;
        $parcela->anchura = $request->anchura;
        $parcela->save();
        return redirect()->route('parcelas.index')->with('status', 'Parcela agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function show(Parcela $parcela)
    {
        return view('parcelas.show', ['parcela' => $parcela]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcela $parcela)
    {
        return view('parcelas.edit', ['parcela' => $parcela]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcela $parcela)
    {
        $parcela->nombre = $request->nombre;
        $parcela->altura = $request->altura;
        $parcela->anchura = $request->anchura;
        $parcela->save();
        return redirect()->route('parcelas.index')->with('status', 'La parcela se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcela $parcela)
    {
        //
    }
}
