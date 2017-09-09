@extends('layouts.app')

<!-- Css -->
@section('custom_css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/persona-style.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-info">
        		<div class="panel-heading titulo-tabla">Tabla de Personas
					
        		</div>
  				<div class="panel-body" id="no-more-tables">
					<table class="table table-responsive" id="personas" cellspacing="0" width="100%">
				
				        <thead>
				            <tr>
				                <th>Nombre</th>
				                <th>Dni</th>
				                <th>Edad</th>
				                <th>Trabajo</th>
				                <th>Problema</th>
				            </tr>
				        </thead>
						
				        <tbody>
				            
							@foreach ($personas as $persona)
							<tr>
				                <td data-title="Nombre">{{ $persona->nombre }}</td>
				                <td data-title="Dni">{{ $persona->dni }}</td>
				                <td data-title="Edad">{{ $persona->edad}}</td>
				                <td data-title="Trabajo">{{ $persona->trabajo }}</td>
				                <td data-title="Problema">{{ $persona->descripcionProblema}}</td>
				            </tr>
							@endforeach
				            
				        </tbody>
				    </table>
				 	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Javascripts -->
@section('custom_js') 
	<script src="{{ asset('js/persona.js') }}"></script>
@endsection