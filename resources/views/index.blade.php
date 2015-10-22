@extends('layout/layout')

@section('content')
	<form method="POST">
	
	<div class="container">
		<div class="col-md-6">
			<h2 class="text-center">Pilas y Colas</h2>
			<div class="form-group">
				<a href="pila" class="btn btn-primary center-block" role="button">Realice las operaciones básicas de una pila</a>
			</div>
			<div class="form-group">
				<a href="cola" class="btn btn-primary center-block" role="button">Realice las operaciones básicas de una cola</a>
			</div>
			<h2 class="text-center">Árboles y Listas Enlazadas</h2>
			<div class="form-group">
				<a href="/arboles" class="btn btn-success center-block" role="button">Compruebe el ejercicio de árboles</a>
			</div>
			<div class="form-group">
				<a href="lista" class="btn btn-success center-block" role="button">Revise como hacer listas enlazadas</a>
			</div>
		</div>
		<div class="col-md-6">
			<h2 class="text-center">Métodos de Ordenamiento</h2>
			<div class="form-group">
				<a href="" class="btn btn-warning center-block" role="button">Ordenamiento de Burbuja</a>
			</div>
			<div class="form-group">
				<a href="" class="btn btn-warning center-block" role="button">Ordenamiento Rápido (Quick Sort)</a>
			</div>
			
			<h2 class="text-center">Métodos de Búsqueda</h2>
			<div class="form-group">
				<a href="" class="btn btn-danger center-block" role="button">Búsqueda Secuencial</a>
			</div>
			<div class="form-group">
				<a href="" class="btn btn-danger center-block" role="button">Búsqueda Binaria</a>
			</div>
			
		</div>

	</div>
	</form>
@endsection