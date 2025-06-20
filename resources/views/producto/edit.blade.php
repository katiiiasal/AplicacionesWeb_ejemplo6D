<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actualizar Producto</h2>
    <form action="{{route('Producto.update', $prod->id)}}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name= "nombre" value="{{$prod->nombre}}"></td>
        </tr>
        
        <tr>
            <td>Descripcion:</td>
            <td><input type="text" name= "descripcion" value="{{$prod->descripcion}}"></td>
        </tr>
        
        <tr>
            <td>Precio:</td>
            <td><input type="number" name= "precio" id="" value="{{$prod->precio}}"></td>
        </tr>
        
        <tr>
            <td>Existencia:</td>
            <td><input type="number" name= "existencia" id="" value="{{$prod->existencia}}"></td>
        </tr>
        
        <tr>
            <td><input type="submit" name= "Actualizar"></td>
        </tr>
    </table>
 </form>
</body>
</html>