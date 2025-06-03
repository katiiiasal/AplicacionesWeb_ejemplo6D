<?php

namespace App\Http\Controllers;

use App\Models\Producto;
//use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function verproductos(){

        //$productos=Producto::get();
        //$productos=Producto::first();
        //$productos=Producto::find(30);
        //$productos=Producto::latest()->paginate();
        $productos=Producto::latest("id")->paginate();
        //dd($productos);

        return view("producto", ["productos"=>$productos]);
    }
}
