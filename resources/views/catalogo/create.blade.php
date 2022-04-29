<form action="{{route('catalogo.store')}}" method="POST">
    @csrf
<label > categoria </label>
<input type="text" name="categoria">
<input type="submit">

</form>