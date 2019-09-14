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

Route::get('/listaServicios', function () {
    
    $serviceList =[
         [
            "Servicio" => "Edenor",
            "Importe"=> 3500,
            "Nro de Ref"=> 2345435,
         ],
        ["Servicio"=> "Aysa",
            "Importe"=> 340,
            "Nro de Ref"=> 12345,
         ],
         
        ["Servicio"=> "Telecentro",
        "Importe"=> 2377,
        "Nro de Ref"=> 2938,
     ],
    ];
    
    $res = [
        "status"=> "ok",
        "code"=> 1005,
        "data"=> $serviceList
    ];

    return response()->json($res);
});
Route::get('/serviciosPorId/{id}', function ($id) {
    
    $serviceById =[
        "Status"=> "ok",
        "coder"=> 1001,
        "data"=> "Servicio " . $id
    ];

    return response()->json($serviceById);

});

Route::post('/crearServicios', function(){
    $serviceCreate = [
        "Status"=> "ok",
        "coder"=> 1002,
        "data"=> "Se crea Servicio"
    ];

    return response()->json($serviceCreate);

});
Route::put('/modificarServicios', function(){
    
    $serviceModify = [
        "Status"=> "ok",
        "coder"=> 1003,
        "data"=> "Se Modifica servicio"
    ];

    return response()->json($serviceModify);
});
Route::delete('/eliminarServicios', function(){
    $serviceDelete = [
        "Status"=> "ok",
        "coder"=> 1004,
        "data"=> "Se elimina servicio"
    ];

    return response()->json($serviceDelete);
});

