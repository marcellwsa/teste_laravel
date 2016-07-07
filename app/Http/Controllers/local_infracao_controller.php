<?php

namespace SIGPAD\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use SIGPAD\Http\Requests;
use SIGPAD\Local_infracao;
use PDF;
use dompdf\dompdf;

class local_infracao_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local_infracao = Local_infracao::orderBy('descricao_local_infracao', 'ASC')->paginate(10); //OKOKOK
        
        return view ('local_infracao.index', compact('local_infracao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('local_infracao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Local_infracao::create($request->all());

        return redirect()->route('local_infracao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $local_infracao = Local_infracao::findOrFail($id);

        return view('local_infracao.show', compact('local_infracao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $local_infracao = Local_infracao::findOrFail($id);

        return view('local_infracao.edit', compact('local_infracao'));
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
        $local_infracao = Local_infracao::findOrFail($id)->update($request->all());

        return redirect()->route('local_infracao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Local_infracao::destroy($id);
        return redirect()->route('local_infracao.index');
    }

    public function imprimirDados($id) 
    {
        

        //require_once "config\dompdf.php";
        $dompdf = new dompdf();
        $html = View::make('/app/views/local_infracao/imprimirDados.blade.php');
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("teste.pdf");

    }   

    
}
