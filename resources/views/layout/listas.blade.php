@extends('layout/layout')

@section('content')
	<div class="container">
		<div class="col-md-6">
			<div class="form-group col-md-8">
				<div class="form-group">
					<label for="valorNuevo">Valor para agregar a {{ $tipoObjeto }}</label>
					<input type="text" class="form-control" placeholder='Valor nuevo...' id="valorNuevo">
				</div>
			
				<div class="btn-group-vertical" role="group" aria-label="...">
					<button class="btn btn-primary btn-block" id="push"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Agregar (Push)</button>
					<button class="btn btn-success btn-block" id="get"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Sacar (Get)</button>
					<button class="btn btn-warning btn-block" id="empty"><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span> Vacio (Empty)</button>
					<button class="btn btn-danger btn-block" id="size"><span class="glyphicon glyphicon-move" aria-hidden="true"></span> Tamaño (Size)</button>
				</div>
			
			</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"> Datos de la {{ $tipoObjeto }}</div>
			<div class="panel-body">
				<table class="table table-hover" id="tabla-pila">
					<thead>
						<th>Elemento</th>
						<th>Valor</th>
						<th>Siguiente</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
	</div>
	<input type="hidden" id="tipoObjeto" name="tipoObjeto" value={{$tipoObjeto}} >
		<script type="text/javascript" src="js/pila.js"></script>


@endsection
	
