<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return Usuario::get($request->all());  creo que hay una forma asi como esta.
        $data = null;
        if ($request){
            if ($request->nombre){            
                $data=Usuario::where('nombre','=',$request->nombre)                
               ->get();    
               return $data;            
            }
            if ($request->correo){            
                $data=Usuario::where('correo','=',$request->correo)                
               ->get();       
               return $data;         
            }
            if ($request->activo){            
                $data=Usuario::where('activo','=',$request->activo)                
               ->get();                
               // activo=1 y activo=false :  solo asi me esta funcionando 
               return $data;
            }

            return Usuario::get();
            //  no esta fucnionando el $request sin data 
            
       
        }
        else {
           return Usuario::get();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all()) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
    }
}
