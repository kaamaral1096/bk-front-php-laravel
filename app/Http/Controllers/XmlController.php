<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caminhao;

class XmlController extends Controller
{
    // pegar todos os dados e gerar um xml a partir deles
    public function gerarXml() {
        //busca dados dos bancos
        $dados = Caminhao::all();
        // print_r($dados);
        // retorna view com os dados
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
