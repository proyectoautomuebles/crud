<h1>crear producto</h1>



<form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<label > id categoria </label>
<input type="text" name="id_catalogos">
<br>
<label > nombre </label>
<input type="text" name="nombre">
<br>
<label > descripcion </label>
<input type="text" name="descripcion">

<br>
<label > precio </label>
<input type="text" name="precio">
<br>
<label > imagen </label>
<input type="file" name="foto">
<br>

<input type="submit">
</form>
