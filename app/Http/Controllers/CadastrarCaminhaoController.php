<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caminhao;

class CadastrarCaminhaoController extends Controller
{
    public function salvar(Request $request) {
        $request->validate([
            "modelo" => "required|min:3|max:15",
            "eixos" => "required|integer",
            "dataFabricacao" => "required|date",
            "passageiros" => "required|integer",
            "cor" => "required|string",
        ],[
            "modelo.required" => "Campo obrigatório",
            "eixos.required" => "Campo obrigatório",
            "dataFabricacao.required" => "Campo obrigatório",
            "passageiros.required" => "Campo obrigatório",
            "cor.required" => "Campo obrigatório"
        ]); 

        $objeto = new Caminhao();
        $objeto->fill($request->all());
        $objeto->save();

        return view('cadastrosalvo');

    }
}
