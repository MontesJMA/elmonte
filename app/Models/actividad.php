<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class actividad extends Model


{

    public  $table="actividad";
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nombre',
        'dificultad',
        'zona',
        'tiempo',
        'imagen',
        'dia',

    ];

    public function own(){
        return $this->belongsTo(User::class);
    }
}
