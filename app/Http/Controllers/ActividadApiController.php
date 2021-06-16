<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActividadApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response()->json(actividad::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $newactividad = new actividad();
        $newactividad->nombre=$request->nombre;
        $newactividad->dificultad=$request->dificultad;
        $newactividad->zona=$request->zona;
        $newactividad->tiempo=$request->tiempo;
        $newactividad->dia=$request->dia;
        $newactividad->imagen=null;
        $newactividad->user_id=null;



        $newactividad->save();

        return response()->json(['error'=>'false','msg'=>'actividadAñadida']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(actividad::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $newactividad=actividad::FindOrFail($id);
        $newactividad->nombre=$request->nombre;
        $newactividad->dificultad=$request->dificultad;
        $newactividad->zona=$request->zona;
        $newactividad->tiempo=$request->tiempo;
        $newactividad->dia=$request->dia;
        $newactividad->imagen=null;
        $newactividad->user_id=null;


        $newactividad->save();


        return response()->json("Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        actividad::find($id)->delete();

        return response()->json("Borrado");
    }
}
