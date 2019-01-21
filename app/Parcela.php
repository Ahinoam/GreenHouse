<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    protected $table = "parcelas";
    protected $fillable = ['nombre', 'altura', 'anchura'];
}
