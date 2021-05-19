<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador(){
       //mostrar formulario de metabuscador
       return view('metabuscador');
    }
    public function buscar(){
        //almacenar los datos transmitidos en respectivas variables
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //2.determinar el motor de busqueda fue el elegido
        //dependiendo de motores
        
        switch($motores){
            case 1: //debe redireccionar a google de busqueda
               return redirect()->to ("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to ("https://www.bing.com/search?q=$termino");
                break;    
            case 3:
                return redirect()->to ("https://duckduckgo.com/?q=$termino");
                break;  
            case 4:
                return redirect()->to ("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=0&ie=utf8&query$termino");
                break;
            case 5:
                return redirect()->to("https://search.yahoo.com/search;_ylt=AwrJ7J3gE6VgLwQA115DDWVH;_ylc=X1MDMTE5NzgwNDg2NwRfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZANNM2xQNnA5WFNXRzQ2bGwzTWlGbDJBBG5fcnNsdAMwBG5fc3VnZwMxMARvcmlnaW4Dc2VhcmNoLnlhaG9vLmNvbQRwb3MDMARwcXN0cgMEcHFzdHJsAzAEcXN0cmwDNQRxdWVyeQNjYXJybwR0X3N0bXADMTYyMTQzMTI3MQ--?p=$termino");    
            case 6:
                return redirect()->to ("https://www.wolframalpha.com/input/?i=$termino");
                break; 
            case 7:
                return redirect()->to ("https://boardreader.com/s/$termino");
                break; 
            case 8:
                return redirect()->to ("https://search.aol.com/aol/search?q=$termino");
                break; 
            case 9:
                return redirect()->to ("https://www.ecosia.org/search?q=$termino");
                break; 
            case 10:
                return redirect()->to ("https://www.qwant.com/?q=$termino");
                break;                 
        }

        //print_r($_POST);
       

    }

}