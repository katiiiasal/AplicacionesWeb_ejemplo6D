<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registra Producto</h2>
    <form action="{{route('Producto.store')}}" method="post">
    @csrf
    @method('POST')
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name= "nombre"></td>
        </tr>
        
        <tr>
            <td>Descripcion:</td>
            <td><input type="text" name= "descripcion"></td>
        </tr>
        
        <tr>
            <td>Precio:</td>
            <td><input type="number" name= "precio" id=""></td>
        </tr>
        
        <tr>
            <td>Existencia:</td>
            <td><input type="number" name= "existencia" id=""></td>
        </tr>
        
        <tr>
            <td><input type="submit" name= "Guardar"></td>
        </tr>
    </table>
 </form>
</body>
</html>