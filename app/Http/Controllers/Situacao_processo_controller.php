<?php

namespace SIGPAD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use SIGPAD\Http\Requests;
use SIGPAD\Situacao_processo;

class Situacao_processo_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //TODO
        //$situacao_processos = DB::select('SELECT * FROM ' . Situacao_processo->getTable );
        //$situacao_processos = Situacao_processo::all(); //OKOKOK
        //$situacao_processos = DB::select('SELECT * FROM situacao_processos' ); //Situacao_processo::getTable()
        $sit = Situacao_processo::orderBy('descricao_situacao_processo', 'ASC')->paginate(100); //OKOKOK
        
        return view ('situacao_processo.index', compact('sit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('situacao_processo.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Situacao_processo::create($request->all());

        return redirect()->route('situacao_processo.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $situacao_processo = Situacao_processo::findOrFail($id);

        return view('situacao_processo.show', compact('situacao_processo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $situacao_processo = Situacao_processo::findOrFail($id);

        return view('situacao_processo.edit', compact('situacao_processo'));
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
        $situacao_processo = Situacao_processo::findOrFail($id)->update($request->all());

        return redirect()->route('situacao_processo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$situacao_processo = Situacao_processo::find($id)->delete();
        Situacao_processo::destroy($id);
        return redirect()->route('situacao_processo.index');
    }
}
