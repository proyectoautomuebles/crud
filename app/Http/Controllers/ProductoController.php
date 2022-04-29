<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    public function create (){

        return view ('producto.create');



        }


        public function store (Request $request){

            $cliente=request()->except('_token');
            if($request->hasfile('foto')){
                $cliente['foto']=$request->file('foto')->store('imagescliente','public');
            }
            producto::insert($cliente);
         
            }


    public function show (){

        $cliente= producto::all();
        return view ('producto.show',compact('cliente'));

    }

    public function edit ($id){

        $cliente= producto::findOrFail($id);
        return view('producto.edit',compact('cliente'));

    }

    public function update (request $request,$id){

        $cliente=request()->except('_token');
        if($request->hasfile('foto')){
            $cliente= producto ::findOrFail($id);
             Storage ::delete('public/'.$cliente->foto);
            $cliente['foto']=$request->file('foto')->store('imagescliente','public');
        }
        producto::where('id','=',$id)->update($cliente);
        

        
        return redirect()->route('producto.show');


    }
    public function  destroy (request $request,$id){

        $cliente= producto::findOrFail($id);
        $cliente->delete();
        return redirect()->route('producto.show');

    }



}
