<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';

    protected $fillable = ['calle', 'numero', 'colonia', 'municipio', 'estado', 'cp', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
