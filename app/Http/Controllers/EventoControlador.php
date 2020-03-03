<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoControlador extends Controller
{
    public function create(Request $request){
        $novoEvento = new Evento();
        $novoEvento->name = $request['name'];
        $novoEvento->descricao = $request['descricao'];
        $novoEvento->categoria = $request['categoria_id'];
        $novoEvento->data_evento = $request['data_evento'];
        $novoEvento->cidade = $request['cidade_id'];
        $novoEvento->save();
    }

    public function getAll(Request $request){
        return response()->Json(Evento::all());
    }
    public function getEventoById(Request $request){
        $eventoById = Evento::find($request['id']);
        return response()->Json($eventoById);
    }
    public function update(Request $request){
        $UpdEvento = Evento::find($request['id']);
        $UpdEvento->name = $request['name'];
        $UpdEvento->descricao = $request['descricao'];
        $UpdEvento->categoria = $request['categoria_id'];
        $UpdEvento->data_evento = $request['data_evento'];
        $UpdEvento->cidade = $request['cidade_id'];
        $UpdEvento->save();

        return response()->Json($UpdEvento);
    }
    public function deleteEventoById(Request $request){
        $deleteEventoById = Evento::find($request['id']);
        $deleteEventoById->delete();
    }
}
