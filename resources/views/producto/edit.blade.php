<h1>editar</h1>




<form action="{{route('producto.update',$cliente->id)}}" method="POST">
@csrf
   
<label > id categoria </label>
<input type="text" name="id_catalogos" value="{{$cliente->id_catalogos}}">
<br>
<label > nombre </label>
<input type="text" name="nombre" value="{{$cliente->nombre}}">
<br>
<label > descripcion </label>
<input type="text" name="descripcion" value="{{$cliente->descripcion}}">

<br>
<label > precio </label>
<input type="text" name="precio" value="{{$cliente->precio}}"> 
<br>

<input type="submit">
</form>

