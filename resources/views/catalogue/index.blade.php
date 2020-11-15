@extends('layouts.app')
@section('content')



<div>
    <h3>Catalago de Servicios <span class="derecha">{{now()}}</span></h3>
</div>

<a href="{{ url('catalogue/create') }} " class="btn btn-success">Registrar Un Nuevo Servicio</a>
<br>
<br>

<table class="table table-hover">
    <thead class="thead-light" style="text-align: center;">
        <tr class="center">
                <th>NombreServicio</th>
                <th>Descripcion</th>
                <th>Disponibilidad</th>
            </tr>
        </tr>
    </thead>
    <tbody>

    @foreach ($catalogue as $catalague)
    
        <tr>
            <td>{{$catalogue->NombreServicio}}</td>
                <td>{{$catalogue->Descripcion}}</td>
                <td>{{$catalogue->Disponibilidad?'Disponible':'NoDisponible'}}</td>
            
          
        </tr>
    @endforeach
    </tbody>
</table>
@stop
