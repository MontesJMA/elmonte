<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class evento extends Model
{
    public  $table="evento";

    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
    ];

    public function own(){
        return $this->belongsTo(User::class);
    }
}
