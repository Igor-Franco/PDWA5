<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class XmlController extends Controller
{
    //RN: pegar todos os dados e gerar um XML

    public function gerarXml(){
        $dados = Videogame::all();
        //print_r($dados);

        return response()->view('data-xml', ['registros' => $dados])
        ->header('Content-Type', 'application/xml');
    }
}
