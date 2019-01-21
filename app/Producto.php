<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Producto extends Model
{
    use Notifiable;
    protected $table = "productos";
    protected $fillable = ['nombre', 'descripcion', 'precio', 'img', 'marca_id', 'departamento_id'];

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
}
