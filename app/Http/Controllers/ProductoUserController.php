<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoUserController extends Controller
{
    public function index()
    {
        $productos=producto::paginate(6);
        return view('productouser', compact('productos'));
    }
}
