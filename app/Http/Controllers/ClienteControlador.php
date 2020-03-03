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
        $novoCliente->password = bcrypt($request['password']);
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
        $UpdCliente = Cliente::find($request['cliente_id']);
        $UpdCliente->name = $request['name'];
        $UpdCliente->email = $request['email'];
        $UpdCliente->password = bcrypt($request['password']);
        $UpdCliente->save();

        return response()->Json($UpdCliente);
    }

    public function deleteClienteById(Request $request){
        $deleteClienteById = Cliente::find($request['cliente_id']);
        $deleteClienteById->delete();
    }

}
