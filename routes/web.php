<?php

use Illuminate\Support\Facades\Route;

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
       //Arreglo: estructura de datos
       $estudiante = ['AN' => "Ana",
                      'MA' => "Maria",
                       'JO' =>'jorge'];
       echo "<pre>";
       var_dump($estudiante);
       echo "<pre>";
});

   Route:: get("paises",function(){

    $paises= [ "Colombia" => [
                               "capital"=> "Bogota",
                               "moneda" => "Peso",
                               "poblacion" => 51
                             ],
                "Peru" => [
                               "capital"=> "Lima",
                               "moneda" => "sol",
                               "poblacion" => 32.8

                             ],
                "Paraguay" =>[
                                "capital"=> "asuncion",
                                "moneda" => "Guarani",
                                "poblacion" => 7.3
                    ]
                ];
       //llamar una vista
       //con datos de paises
       //se reconocen los datos
       //     se reconocen los datos en la vista
       return view('paises')->with("naciones", $paises);

});
