@extends('layouts.master')
<link href="{{ asset('/bower_components/jquery-validation/css/jquery.validate.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
@section('contenido')
<div class="col-lg-6">
	
	<h1 class="page-header">Reservar Carros de Golf</h1>
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Reservación exitosa.</strong>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			Reservar
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<form role="form" id="form_reservar_carros" method="post">
						<div class="form-group">
							<label>Carro</label>
							@if(empty($carros))
							<select class="form-control">
								<option>No hay carros disponibles</option>
							</select>
							@else
							<select class="form-control" id="tipo">
								@foreach($carros as $id => $carro)
								<option value="{{$id}}">{{$carro}}</option>
								@endforeach
							</select>
							@endif
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
							<div class="input-field">
								<label>Desde</label>
								<input type="date" class="form-control" id="desde" name="desde">
								<div class="error"></div>
							</div>
							</div>
							<div class="col-lg-6">
							<div class="input-field">
								<label>Hora</label>
								<input type="time" class="form-control" id="hora_desde" name="hora_desde">
								<div class="error"></div>
							</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
							<div class="input-field">
								<label>Hasta</label>
								<input type="date" class="form-control" id="hasta" name="hasta">
								<div class="error"></div>
							</div>
							</div>
							<div class="col-lg-6">
							<div class="input-field">
								<label>Hora</label>
								<input type="time" class="form-control" id="hora_hasta" name="hora_hasta">
								<div class="error"></div>
							</div>
							</div>
						</div>
						<div class="form-group">
						<div class="input-field">
							<label>Cantidad de personas</label>
							<input type="number" class="form-control" placeholder="" id="cant" name="cant">
							<div class="error"></div>
						</div>
						</div>
						<div class="form-group">
						<div class="input-field">
							<label>Costo</label>
							<input class="form-control" placeholder="" id="costo" name="costo">
							<div class="error"></div>
						</div>
						</div>


						<div>
							<!--<button type="button" id="btn-reservar" class="btn btn-success">Reservar</button>-->
							<input id="btn-reservar" class="btn btn-success" type="submit" name="submit" value="Reservar">
							<button type="reset" class="btn btn-danger">Borrar</button>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					</form>
				</div>
				<!-- /.col-lg-6 (nested) -->

			</div>
			<!-- /.row (nested) -->
		</div>
	</div>
	<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
@endsection


