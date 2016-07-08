<?php

namespace SIGPAD\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use PRF\FaleConosco;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $faleconosco = new FaleConosco(config("PRF.producao"));
        return view('Home.index')->with("faleconosco", $faleconosco->getAvisos(Auth::user()->cpf, config("PRF.siglaSistema")));
    }
    }
