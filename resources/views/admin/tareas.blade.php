@extends('dashboard')

@section('body')
	<h3>Mis Tareas</h6>
	<hr>
	<br>
	<div class="card border-light mb-3">
	  <div class="card-header">
	    <h6>Descripción de la Tarea</h6>
	  </div>
	  <div class="card-body">
	  	<div class="row">
	  		<div class="col-sm-6">
    		<ul class="list-group">
			<li class="list-group-item">Fecha Pendiente: <b>Viernes, 28 de Septiembre, 2018</b></li>
			<li class="list-group-item">Tiempo Gastado <b>0 hours 0 minutes</b></li>
			<li class="list-group-item">Cambiar Estado <br>
				<select class="form-control">
				  <option value="volvo">Abierto</option>
				  <option value="saab">Completo</option>
				  <option value="mercedes">Trabajando</option>
				  <option value="audi">Nuevo</option>
				</select>
			</li>
			<li class="list-group-item">Hito MIL 1</li>
			</ul>
    	</div>
    	<div class="col-sm-6">
    		<ul class="list-group">
			<li class="list-group-item">Creado en: <b>Viernes, 28 de Septiembre, 2018</b></li>
			<li class="list-group-item">Creado por <b>Demo Admin</b></li>
			<li class="list-group-item">Proyecto 49<b> Agua potable</b> <br>
			</li>
			</ul>
    	</div>
	  	</div>
    	
	  </div>
	</div>
	<div class="card border-light mb-3">
	  <div class="card-header">
	    <h6>Descripción de la Tarea</h6>
	  </div>
	  <div class="card-body">
	  	<div class="row">
	  		<div class="col-sm-6">
    		<ul class="list-group">
			<li class="list-group-item">Fecha Pendiente: <b>Viernes, 28 de Septiembre, 2018</b></li>
			<li class="list-group-item">Tiempo Gastado <b>0 hours 0 minutes</b></li>
			<li class="list-group-item">Cambiar Estado <br>
				<select class="form-control">
				  <option value="volvo">Abierto</option>
				  <option value="saab">Completo</option>
				  <option value="mercedes">Trabajando</option>
				  <option value="audi">Nuevo</option>
				</select>
			</li>
			<li class="list-group-item">Hito MIL 1</li>
			</ul>
    	</div>
    	<div class="col-sm-6">
    		<ul class="list-group">
			<li class="list-group-item">Creado en: <b>Viernes, 28 de Septiembre, 2018</b></li>
			<li class="list-group-item">Creado por <b>Demo Admin</b></li>
			<li class="list-group-item">Proyecto 49<b> Agua potable</b> <br>
			</li>
			</ul>
    	</div>
	  	</div>
    	
	  </div>
	</div>
@endsection