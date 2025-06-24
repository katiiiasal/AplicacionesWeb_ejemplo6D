<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('producto.create')}}">Agregar nuevo elemento</a>
    <h3>Lista de productos</h3>
    <table>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>EXISTENCIA</th>
        </tr>

@foreach($productos as $pro)    
    <tr>
        <td>{{ $pro->id }}</td>
        <td>{{ $pro->nombre }}</td>
        <td>{{ $pro->descripcion }}</td>
        <td>{{ $pro->precio }}</td>
        <td>{{ $pro->existencia }} </td>
        <td> <a href="{{route('producto.edit', $pro->id)}}">Modificar</a></td>
        <td>
            {{--Metodo del profesor para eliminar (QUE NI SIRVE XDDDD)--}}
            {{-- <form onsubmit="return confirm('Seguro que quiere eliminiar?')" action="producto/{{$pro->id}}" method="post">
                @csrf
                @method("DELETE") 
                <input type="submit" value="Eliminar">
            </form> --}}
            {{--Metodo de la caracola magica--}}
            <form onsubmit="return confirm('¿Seguro que quieres eliminar?')" action="{{route('producto.destroy', $pro->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
            </form>
        </td>
    </tr>    
      @endforeach

      {{ $productos-> links() }}
    </table>
</body>
</html>