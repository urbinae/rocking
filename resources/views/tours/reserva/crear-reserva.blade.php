@extends('layouts.master')

@section('contenido')
<div class="col-lg-6">
	
	<h1 class="page-header">Reservar Tour</h1>
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
					<form role="form" id="formValidate" method="post">
						<div class="form-group">
							<label>Tour</label>
							@if(empty($tours))
							<select class="form-control">
								<option>No hay tours</option>
							</select>
							@else
								<select class="form-control" id="tour">
									@foreach($tours as $id => $tour)
										<option value="{{$id}}">{{$tour}}</option>
									@endforeach
								</select>
							@endif
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Desde</label>
								<input type="date" class="form-control" id="desde">
							</div>
							<div class="col-lg-6">
								<label>Hora</label>
								<input type="time" class="form-control" id="hora_desde">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Hasta</label>
								<input type="date" class="form-control" id="hasta">
							</div>
							<div class="col-lg-6">
								<label>Hora</label>
								<input type="time" class="form-control" id="hora_hasta">
							</div>
						</div>
						<div class="form-group">
							<label>Cantidad de personas</label>
							<input class="form-control" placeholder="" id="cant" name="cant">
						</div>
						<div class="form-group">
							<label>Costo</label>
							<input class="form-control" placeholder="" id="costo" name="costo">
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


