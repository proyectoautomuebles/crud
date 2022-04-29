<h1>crear comerdor</h1>



<form action="{{route('comedor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<label > id categoria </label>
<input type="text" name="id_comedores">
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
<label > imagen comedores </label>
<input type="file" name="foto">
<br>

<input type="submit">
</form>
