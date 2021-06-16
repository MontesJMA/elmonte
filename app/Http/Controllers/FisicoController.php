<?php

namespace App\Http\Controllers;

use App\Models\fisico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::FindOrFail(Auth::id());
        // $mycars=$user->cars()->where('color','blanco')->get(); Recupera solo los de color blanco
        $myfisicos=$user->fisicos()->get();

        return view('fisico.index')->with('myfisicos',$myfisicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fisico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
           'usuario' => 'required',
            'edad' => 'required|numeric',
            'genero' => 'required',
            'complexion' => 'required',
            'objetivo' => 'required',
            'altura' => 'required',


        ]);

        $newfisico=new fisico();
        $newfisico->usuario=$request->usuario;
        $newfisico->edad=$request->edad;
        $newfisico->genero=$request->genero;
        $newfisico->complexion=$request->complexion;
        $newfisico->objetivo=$request->objetivo;
        $newfisico->altura=$request->altura;
        $newfisico->user_id=Auth::id();


        $newfisico->save();

        return redirect()->route('fisico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myfisico=fisico::FindOrFail($id);


        return view('fisico.edit')->with('myfisico',$myfisico);
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
        $request->validate([
            'usuario' => 'required',
            'edad' => 'required|numeric',
            'genero' => 'required',
            'complexion' => 'required',
            'objetivo' => 'required',
            'altura' => 'required',


        ]);


        $newfisico=fisico::FindOrFail($id);
        $newfisico->usuario=$request->usuario;
        $newfisico->edad=$request->edad;
        $newfisico->genero=$request->genero;
        $newfisico->complexion=$request->complexion;
        $newfisico->objetivo=$request->objetivo;
        $newfisico->altura=$request->altura;
        $newfisico->user_id=Auth::id();



        $newfisico->save();

        return redirect()->route('fisico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fisico::find($id)->delete();
        return redirect()->route('fisico.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
