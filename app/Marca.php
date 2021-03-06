<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['nombre', 'descripcion'];

    public function productos()
    {
        return $this->hasMany('App\Productos');
    }
}
