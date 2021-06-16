<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fisico extends Model
{
    public  $table="fisico";

    use HasFactory,SoftDeletes;

    protected $fillable = [
        'usuario',
        'edad',
        'genero',
        'complexion',
        'objetivo',
        'altura',

    ];

    public function own(){
        return $this->belongsTo(User::class);
    }
}
