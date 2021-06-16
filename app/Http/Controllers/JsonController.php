<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class JsonController extends Controller
{
    public function index(){
        $actividades=actividad::all();
        return Response::json(
            array(
                "success"=>true,
                "message"=>"servicio web exitoso",
                "Aclividades"=>$actividades

            )

            ,200);
    }
}
