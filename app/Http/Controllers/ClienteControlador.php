<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    
    public function create(Request $request){
        $novoCliente = new Cliente();
        $novoCliente->name = $request['name'];
        $novoCliente->email = $request['email'];
        $novoCliente->cpf = $request['cpf'];
        $novoCliente->save();
    }

    public function getAll(Request $request){
        return response()->Json(Cliente::all());
    }

    public function getClienteById(Request $request){
        $clienteById = Cliente::find($request['cliente_id']);
        return response()->Json($clienteById);
    }

    public function update(Request $request){
        $cliente = Cliente::find($request['cliente_id']);
        $cliente->name = $request['name'];
        $cliente->email = $request['email'];
        $cliente->cpf = $request['cpf'];
        $cliente->save();
    }

    public function deleteClienteById(Request $request){
        $deleteClienteById = Cliente::find($request['cliente_id']);
        $deleteClienteById->delete();
    }

}
