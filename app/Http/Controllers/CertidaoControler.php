<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertidaoControler extends Controller
{

    public function index(Request $req)
    {
        $certidoes = Certidao::all();

        $mensagem = $req->session()->get('mensagem');

        return view('certidoes.index', compact('certidao', 'mensagem'));
    }

    public function adicionar()
    {
        return view('certidoes.adicionar');
    }

}
