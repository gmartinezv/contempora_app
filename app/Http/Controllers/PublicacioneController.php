<?php

namespace App\Http\Controllers;

use App\Models\Publicacione;
use Illuminate\Http\Request;

class PublicacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Publicacione::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacione = new Publicacione;
        $publicacione->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacione $publicacione)
    {
        return $publicacione;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacione $publicacione)
    {
        $publicacione->update($request->all()) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacione $publicacione)
    {
        $publicacione->delete();
    }
}
