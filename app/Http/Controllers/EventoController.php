<?php

namespace App\Http\Controllers;

use App\Models\evento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(\Illuminate\Support\Facades\Auth::user()->hasAnyRole('admin')){
            $myeventos=DB::table('evento')->whereNull('deleted_at')->get();

            return view('evento.index')->with('myeventos',$myeventos);
        }else {


            $user = User::FindOrFail(Auth::id());
            // $mycars=$user->cars()->where('color','blanco')->get(); Recupera solo los de color blanco
            $myeventos = $user->eventos()->get();

            return view('evento.index')->with('myeventos', $myeventos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $horasdes=[];


        $fechasdeshabilitadas=[];


        if(isset($request->nombre)&& isset($request->fecha)) {

            $oldDate = strtotime($request->fecha);

            $newDate = date('Y-m-d',$oldDate);



            $horasdeshabilitadas = DB::select('SELECT hora FROM `evento` WHERE fecha="'.$newDate.'" AND nombre="'.$request->nombre.'" AND deleted_at IS NULL GROUP BY hora HAVING COUNT(*) >= 4');

foreach ($horasdeshabilitadas as $hora){
    $horasdes[]=$hora->hora;
}
        }
        if(isset($request->nombre)&& !isset($request->fecha)) {


            $fechasdeshabilitadas = DB::select('SELECT fecha, COUNT(*) total FROM `evento` WHERE fecha > NOW() AND nombre="'.$request->nombre.'" AND deleted_at IS NULL GROUP BY fecha HAVING total >= 9');


        }


        $count3 = DB::select("SELECT fecha,hora,nombre, COUNT(*) SUMA FROM `evento` WHERE deleted_at IS NULL GROUP BY fecha,hora,nombre HAVING SUMA >=4");

        return view('evento.create')->with('horasdeshabilitadas',$horasdes)->with('fechasdeshabilitadas',$fechasdeshabilitadas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nombreevento=$request->nombre;
        $fechaevento=$request->fecha;
        $horaevento=$request->hora;
        $consulta = "SELECT COUNT(*) FROM evento WHERE nombre='.$nombreevento.' AND fecha='.$fechaevento.' AND hora='.$horaevento.'";
        $sql = DB::select($consulta);

       // $count2 = DB::table('evento')->where('nombre', '<=',$nombreevento)->where('fecha', '<=', $fechaevento)->where('hora', '<=', $horaevento)->whereNull('deleted_at')->count();

        $count2 = evento::where('nombre', '=',$nombreevento)->where('fecha', '=', $fechaevento)->where('hora', '=', $horaevento)->whereNull('deleted_at')->count();


       // if($count2>3){
          //  return redirect()->route('evento.index')->with('success','No queda hueco');
        //}else {

            $oldDate = strtotime($request->fecha);

            $newDate = date('Y-m-d',$oldDate);

            $fechasdeshabilitadas = DB::select('SELECT fecha, COUNT(*) total FROM `evento` WHERE fecha > NOW() AND nombre="'.$request->nombre.'" AND deleted_at IS NULL GROUP BY fecha HAVING total >= 9');

            $horasdeshabilitadas = DB::select('SELECT hora FROM `evento` WHERE fecha="'.$newDate.'" AND nombre="'.$request->nombre.'" AND deleted_at IS NULL GROUP BY hora HAVING COUNT(*) >= 4');



            $permitido=DB::select("select * from evento where nombre='". $request->nombre ."' and fecha='". $newDate ."' and hora='". $request->hora ."' AND deleted_at IS NULL and user_id=". Auth::id() ." ");

            $fechasdes=[];
            $horasdes=[];

            foreach ($horasdeshabilitadas as $hora){
                $horasdes[]=$hora->hora;
            }

            foreach ($fechasdeshabilitadas as $fecha){
                $fechasdes[]=$fecha->fecha;

            }

          //  if (!in_array($request->fecha,$fechasdes)&& !in_array($request->hora,$horasdes) && count($permitido)==0){

                $newevento = new evento();
                $newevento->nombre = $request->nombre;
                $oldDate = strtotime($request->fecha);

                $newDate = date('Y-m-d',$oldDate);

                $newevento->fecha =$newDate;

                $newevento->hora = $request->hora;
                $newevento->user_id = Auth::id();


                $newevento->save();

                return redirect()->route('evento.index');

           //     echo "Evento Permitido";
         //   }else{
         //       echo "Evento NO PERMITIDO";
        //    }





            echo $count2;
       // }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        evento::find($id)->delete();
        return redirect()->route('evento.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
