<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user' , function(Request $request){
    
    // dd($request);
    return response()->Json([
        'res' => 'post2',
        'name' => $request->name
        ]);
        // dd($request->data);
    });
    Route::get('/user' , function(){
        return response()->Json([
            'res' => 'eita'
            ]);
        });
        
        Route::prefix('auth')->group(function(){
            Route::post('registrar' , 'AutenticadorControlador@registrar');
            Route::post('login' , 'AutenticadorControlador@login');
            
            
            
            Route::middleware('auth:api')->group(function(){
                Route::post('logout' , 'AutenticadorControlador@logout');
                
            });
            
        });
        
        Route::middleware('auth:api')->group(function(){
            Route::get('evento' , 'EventoControlador@getAll');
            Route::post('evento-por-id' , 'EventoControlador@getEventoById');
            Route::post('novo-evento' , 'EventoControlador@create');
            Route::post('editar-evento' , 'EventoControlador@update');
            Route::post('deletar-evento' , 'EventoControlador@delete');
            
            Route::get('cliente' ,'ClienteControlador@getAll');
            Route::post('cliente-por-id' , 'ClienteControlador@getClienteById');
            Route::post('novo-cliente' , 'ClienteControlador@create');
            Route::post('editar-cliente' , 'ClienteControlador@update');

            Route::get('ingresso' , 'IngressoControlador@getAll');

        });
        
        
        