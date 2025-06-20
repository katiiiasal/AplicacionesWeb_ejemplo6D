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

    public function create(){
        return view("producto.create");
    } //cierre del metodo create

    public function store(Request $request){
        Request()->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric|min:2',
            'existencia' => 'required|integer|min:1',
        ]);
        $prod = new Producto;

       $prod->nombre = $request->nombre;
       $prod->descripcion = $request->descripcion;
       $prod->precio = $request->precio;
       $prod->existencia = $request->existencia;

       $prod->save();
       $msj="Producto guardado";

       $productos=Producto::latest("id")->paginate();

       return view("producto.index", ["mensaje"=>$msj, "productos"=>$productos]);

    } //cierre del metodo store

    public function edit($id){
        $prod = Producto::find($id);
        // return view("producto.edit", ["producto" => $prod]);
        return view("producto.edit", compact("prod"));
    } //cierre del metodo edit

    public function update(Request $request, $id){
        Request()->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric|min:2',
            'existencia' => 'required|integer|min:1',
        ]);
        $prod = new Producto;

       $prod->nombre = $request->nombre;
       $prod->descripcion = $request->descripcion;
       $prod->precio = $request->precio;
       $prod->existencia = $request->existencia;

       $prod->save();
       $msj="Producto guardado";

       $productos=Producto::latest("id")->paginate();

       return view("producto.index", ["mensaje"=>$msj, "productos"=>$productos]);

    }

} //cierre de la clase
