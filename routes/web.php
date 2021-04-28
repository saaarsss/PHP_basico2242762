<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//funcion anonima
//callback

Route::get('variables', function(){

     //definir una vatiable
     $mensaje = 20;
     //funcion var_dump:analizar una variable
     //muestra tipo de dato y valor
     print_r($mensaje);
     echo "<hr/>";
     $mensaje = "sara ariza";
     var_dump($mensaje);
    });


    Route::get('arreglos', function () {
        $estudiante = ['AN' => "Ana",
                       'MA' => "Maria",
                        'JO' =>'jorge'];
        echo "<pre>";
        var_dump($estudiante);
        echo "<pre>";
    });
