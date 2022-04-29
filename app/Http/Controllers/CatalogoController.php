<?php

namespace App\Http\Controllers;
use App\Models\catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
   public function create(){
    

    return view ('catalogo.create');


   }
   public function store (Request $request){

      $cliente= new catalogo();
    $cliente->categoria= $request->categoria;
    
    $cliente->save();
    
    }
}
