<?php

namespace SIGPAD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SIGPAD\Tipo_infracao_disciplinar;
use SIGPAD\Http\Requests;

class Tipo_infracao_disciplinar_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_infracao_disciplinar = Tipo_infracao_disciplinar::orderBy('descricao_tipo_infracao_disciplinar', 'ASC')->paginate(10); //OKOKOK ->paginate(5)

        return view ('tipo_infracao_disciplinar.index', compact('tipo_infracao_disciplinar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_infracao_disciplinar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tipo_infracao_disciplinar::create($request->all());

        return redirect()->route('tipo_infracao_disciplinar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_infracao_disciplinar = Tipo_infracao_disciplinar::findOrFail($id);

        return view('tipo_infracao_disciplinar.show', compact('tipo_infracao_disciplinar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_infracao_disciplinar = Tipo_infracao_disciplinar::findOrFail($id);

        return view('tipo_infracao_disciplinar.edit', compact('tipo_infracao_disciplinar'));
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
        $tipo_infracao_disciplinar = Tipo_infracao_disciplinar::findOrFail($id)->update($request->all());

        return redirect()->route('tipo_infracao_disciplinar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipo_infracao_disciplinar::destroy($id);
        return redirect()->route('tipo_infracao_disciplinar.index');
    }
}
