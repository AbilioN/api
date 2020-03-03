<?php

namespace App\Http\Controllers;

use App\Ingresso;
use Illuminate\Http\Request;

class IngressoControlador extends Controller
{
    public function create(Request $request){
        $novoIngresso = new Ingresso();
        $novoIngresso->eventoId = $request['evento_id'];
        $novoIngresso->save();
    }
}
