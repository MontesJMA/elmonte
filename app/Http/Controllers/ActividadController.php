<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */


    public function index(Request $request)
    {

        $nombre = $request->get('buscarpor');

        $user=User::FindOrFail(Auth::id());
        // $mycars=$user->cars()->where('color','blanco')->get(); Recupera solo los de color blanco
        $myactivities=$user->activities()->where('dia',"$nombre")->get();

        return view('actividad.index',compact('myactivities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([

                'nombre' => 'required',
                'dificultad' => 'required',
                'tiempo' => 'required',
                'zona' => 'required',
                'dia' => 'required',
            'imagen' => 'required',

        ]);

        $newactividad=new actividad();
        $newactividad->nombre=$request->nombre;
        $newactividad->dificultad=$request->dificultad;
        $newactividad->zona=$request->zona;
        $newactividad->tiempo=$request->tiempo;
        $newactividad->dia=$request->dia;
        $newactividad->user_id=Auth::id();

        $nombreimagen=time().'_'.$request->file('imagen')->getClientOriginalName();
        $newactividad->imagen=$nombreimagen;
        $newactividad->save();

        $request->file('imagen')->storeAs('public/img',$nombreimagen);
        return redirect()->route('actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myactividad=actividad::FindOrFail($id);

        $url='storage/img/';

        return view('actividad.show')->with('myactividad',$myactividad)->with('url',$url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myactividad=actividad::FindOrFail($id);

        $url='storage/img/';

        return view('actividad.edit')->with('myactividad',$myactividad)->with('url',$url);
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
        $validated=$request->validate([

            'nombre' => 'required',
            'dificultad' => 'required',
            'tiempo' => 'required',
            'zona' => 'required',
            'dia' => 'required',


        ]);

        $newactividad=actividad::FindOrFail($id);
        $newactividad->nombre=$request->nombre;
        $newactividad->dificultad=$request->dificultad;
        $newactividad->zona=$request->zona;
        $newactividad->tiempo=$request->tiempo;
        $newactividad->dia=$request->dia;
        $newactividad->user_id=Auth::id();



        if(is_uploaded_file($request->imagen)){
            $nombreimagen=time().'_'.$request->file('imagen')->getClientOriginalName();
            $newactividad->imagen=$nombreimagen;
            $request->file('imagen')->storeAs('public/img',$nombreimagen);

        }

        $newactividad->save();

        return redirect()->route('actividad.index');
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
        return redirect()->route('actividad.index')->with('success','Registro eliminado satisfactoriamente');
    }


}
