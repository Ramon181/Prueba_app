creacion de tiendas

<form class="d-flex" action="{{url('/tienda')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <label for=" nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="fecha_apertura">Fecha Apertura</label>
    <input type="date" name="fecha_apertura" id="fecha_apertura">
    <br>
    <input type="submit" value="Enviar">
</form>