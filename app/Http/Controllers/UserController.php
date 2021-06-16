<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $mycars=$user->cars()->where('color','blanco')->get(); Recupera solo los de color blanco
        $myusers=DB::table('users')->get()->whereNull('deleted_at');

        return view('user.index')->with('myusers',$myusers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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


        ]);

        $newuser=new User();
        $newuser->id=$request->id;
        $newuser->usuario=$request->dificultad;
        $newuser->name=$request->zona;
        $newuser->email=$request->tiempo;


        $newuser->save();


        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myusers=User::FindOrFail($id);



        return view('user.show')->with('myusers',$myusers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myuser=User::FindOrFail($id);


        return view('user.edit')->with('myuser',$myuser);
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

            'id' => 'required',
            'name' => 'required',
            'usuario' => 'required',
            'email' => 'required',



        ]);
        $newuser=User::FindOrFail($id);
        $newuser->id=$request->id;
        $newuser->usuario=$request->usuario;
        $newuser->name=$request->name;
        $newuser->email=$request->email;
        $newuser->password=$request->password;



        $newuser->save();

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
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
