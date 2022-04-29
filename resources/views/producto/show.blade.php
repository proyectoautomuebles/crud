
<table>
<tr>
<th>
    categoria
</th>

<th>
    nombre
</th>

<th>descripcion</th>
<th>
    precio
</th>
<th>
    Actualizar

</th>
<th>
    Eliminar
</th>

</tr>




@foreach($cliente as $clientes)

<tr>
    <td>
        {{$clientes->id_catalogos}}
    </td>
    <td>
        {{$clientes->nombre}}
    </td>
    <td>
        {{$clientes->descripcion }}

    </td>
    <td>
         {{$clientes->precio}}

    </td>
    <td>
        <img src="{{asset('storage').'/'.$clientes->foto}}" width="100"alt="">

   </td>
    <td><a href="{{route('producto.edit',$clientes->id)}}">Actualizar</a>  </td>

    <td>
        <form action="{{route('producto.destroy',$clientes->id)}}"  method="post">
      @method('delete')
      @csrf
      <input type="submit" value="Eliminar">

        </form>
    </td>
</tr>
@endforeach
</table>


