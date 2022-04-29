<?php

namespace App\Http\Controllers;
use App\Models\comedores;
use Illuminate\Http\Request;

class ComedoresController extends Controller
{
    //
    public function create(){
        
        return view ('comedores.create');
 


    }
    public function store (request $request){
    
        $formulario= $request->except("_token");

        if($request->hasFile('foto')){
            $formulario['foto']=$request->file('foto')->store('imagescliente','public')  ;


        }
        comedores::insert($formulario);
        return redirect()->route('comedor.create');
      
  
    }

    public function show (){

        $pasar= comedores::all();
        return view ('comedor.show',compact('pasar'));





    }
 


}
