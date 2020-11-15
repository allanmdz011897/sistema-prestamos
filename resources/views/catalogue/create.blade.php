@extends('layouts.app')

@section('content')
<form action="{{url('/catalogue')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			
            <div class="form-group">
            	<label for="NombreServicio">{{'NombreServicio'}}</label>
            	<input type="text" name="NombreServicio" id="NombreServicio "class="form-control" placeholder="NombreServicio" value="">
            </div>

            <div class="form-group">
            	<label for="Descripcion">{{'Descripcion'}}</label>
            	<input type="text" name="Descripcion" id="Descripcion" class="form-control" placeholder="Descripcion:">
            </div>

			 <div class="form-group">
            	<label for="Disponibilidad">{{'Disponibilidad'}}</label>
            	<input type="text" name="Disponibilidad" id="Disponibilidad" class="form-control" placeholder="Disponibilidad:">
            </div>

			
            <div class="form-group">
            	<button class="btn btn-primary" type="submit" value="Agregar">Agregar</button>
            </div>

			
		</div>
	</div>
	</form>
	 @stop
