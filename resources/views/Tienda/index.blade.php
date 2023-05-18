Mostrar las listas de tiendas
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha de Apertura</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tienda as $tiend)
        <tr>
            <td>{{$tiend->id}}</td>
            <td>{{$tiend->nombre}}</td>
            <td>{{$tiend->fecha_apertura}}</td>
        </tr>
        @endforeach
    </tbody>
</table>