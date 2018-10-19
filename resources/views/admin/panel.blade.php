@extends('dashboard')

@section('body')
    	<p class="h3"><i class="fa fa-dashboard"></i> Dashboard</p>
    	<hr>
    	<br>
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="alert alert-info">
					<h1 class="text-center">3</h1>
					<h6 class="text-center">TICKETS DE SOPORTE ABIERTOS</h6>
				</div>
				
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="alert alert-info">
					<h1 class="text-center">37</h1>
					<h6 class="text-center">SOLICITUDES DE SERVICIO ABIERTAS</h6>
				</div>
				
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="alert alert-info">
					<h1 class="text-center">43</h1>
					<h6 class="text-center">PROYECTOS ACTIVOS</h6>
				</div>
				
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="alert alert-info">
					<h1 class="text-center">47</h1>
					<h6 class="text-center">FACTURAS VENCIDAS</h6>
				</div>
				
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<div class="table-responsive">
				  <table class="table">
				    <thead class="thead-light">
					    <tr>
					      <th scope="col">Últimos mensajes - ( Service Requests, Support Tickets, Projects)</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>	
					      <th scope="row">Mensaje de Prueba <a href="" class="btn-link pull-right">
                            <i class="fa fa-reply"></i> Respuesta</a></th>
					    </tr>
					    <tr>
					      <th scope="row">Mensaje de Prueba <a href="" class="btn-link pull-right">
                            <i class="fa fa-reply"></i> Respuesta</a></th>
					    </tr>
					</tbody>
				  </table>
				</div>	
			</div>
			<div class="col-sm-6">
				<div class="table-responsive">
				  <table class="table">
				    <thead class="thead-light">
					    <tr>
					      <th scope="col">Resumen de parte de horas (en minutos) Mes actual</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					      <th scope="row">No hay registros de tiempo.</th>
					    </tr>
					</tbody>
				  </table>
				</div>	
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<div class="table-responsive">
				  <table class="table">
				    <thead class="thead-light">
					    <tr>
					      <th scope="col">Boletos de soporte este mes</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>	
					      <th scope="row">Entradas Recientes</th>
					    </tr>
					    <tr>
					      <th scope="row">** No hay entradas recientes</th>
					    </tr>
					</tbody>
				  </table>
				</div>	
			</div>
			<div class="col-sm-6">
				<div class="table-responsive">
				  <table class="table">
				    <thead class="thead-light">
					    <tr>
					      <th scope="col">Solicitudes de servicio este mes</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					     	<th scope="row">Solicitudes Recientes</th>
					    </tr>
					    <tr>
					      <th scope="row">** No hay entradas recientes</th>
					    </tr>
					</tbody>
				  </table>
				</div>	
			</div>
		</div>
@endsection