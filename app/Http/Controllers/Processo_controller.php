<?php

namespace SIGPAD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Input;

use SIGPAD\Http\Requests;
use SIGPAD\Processo;
use SIGPAD\Local_infracao;
use SIGPAD\Tipo_infracao_disciplinar;
use SIGPAD\Situacao_processo;

class Processo_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processo = Processo::orderBy('id', 'ASC')->paginate(10); //OKOKOK
        
        return view ('processo.index', compact('processo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('processo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $processo = new Processo;
        $processo->numero_processo          = Input::get('numero_processo');
        $processo->situacao_processo_id     = Input::get('situacao_processo'); 
        $processo->local_infracao_id        = Input::get('local_infracao');
        $processo->tipo_infracao_disciplinar_id = Input::get('tipo_infracao_disciplinar');
        $processo->observacoes              = Input::get('observacoes');
        
        $processo->save();


        return redirect()->route('processo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $processo = Processo::findOrFail($id);

        return view('processo.show', compact('processo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $processo = Processo::findOrFail($id);

        return view('processo.edit', compact('processo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $processo =Processo::findOrFail($id);
        $processo->numero_processo          = Input::get('numero_processo');
        $processo->situacao_processo_id     = Input::get('situacao_processo'); 
        $processo->local_infracao_id        = Input::get('local_infracao');
        $processo->tipo_infracao_disciplinar_id = Input::get('tipo_infracao_disciplinar');
        $processo->observacoes              = Input::get('observacoes');
        
        $processo->save();


        return redirect()->route('processo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $processo = Processo::findOrFail($id);
        $processo->delete();
        
        return redirect()->route('processo.index');
    }



}
