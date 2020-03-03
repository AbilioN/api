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
        $novoEvento->categoria = $request['categoria'];
        $novoEvento->data_evento = $request['data_evento'];
        $novoEvento->cidade = $request['cidade'];
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
        $evento = Evento::find($request['id']);
        $evento->name = $request['name'];
        $evento->descricao = $request['descricao'];
        $evento->categoria = $request['categoria'];
        $evento->data_evento = $request['data_evento'];
        $evento->cidade = $request['cidade'];
        $evento->save();
    }
    public function deleteEventoById(Request $request){
        $deleteEventoById = Evento::find($request['id']);
        $deleteEventoById->delete();
    }
}
