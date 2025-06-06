<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

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

    public function index()
    {
        $productos=Producto::latest("id")->paginate();
        //dd($productos);

        return view("producto.index", ["productos"=>$productos]);
    } // cierre del metodo index

    public function destroy($id)
    {
        $productos= Producto::find($id);
        $productos->delete();
        $msj="Producto eliminado";

        $productos=Producto::latest("id")->paginate();

        return view("producto.index", ["mensaje"=>$msj, "productos"=>$productos]);
    } //cierre del metodo destroy

} //cierre de la clase
