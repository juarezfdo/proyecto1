@extends('dashboard')

@section('body')
	<h3>Aministrar Tickets de Soporte</h6>
	<hr>
	<br>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Abierto</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trabajando</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cerrado</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<br>
	  	<div class="table-responsive">
		  <table class="table table-bordered">
		    <thead class="thead-light">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Tema</th>
			      <th scope="col">Estado</th>
			      <th scope="col">Propietario</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Creado en</th>
			      <th scope="col">Actualizado en</th>
			      <th scope="col">Secciones</th>
			      <th scope="col">Usuario Asginado</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>f140a4db-1e44-4572-9db4-8d61b26d6d1c</th>
			      <th>Computter</th>
			      <th>Open</th>
			      <th>Demo Client</th>
			      <th>1 Months DTV</th>
			      <th>2 weeks ago</th>
			      <th>2 weeks ago</th>
			      <th>Suscripciones</th>
			      <th></th>
			    </tr>
			</tbody>
		  </table>
		  <nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li class="page-item inactive"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
		</div>
	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	<br>
	  	<div class="table-responsive">
		  <table class="table table-bordered">
		    <thead class="thead-light">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Tema</th>
			      <th scope="col">Estado</th>
			      <th scope="col">Propietario</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Creado en</th>
			      <th scope="col">Actualizado en</th>
			      <th scope="col">Secciones</th>
			      <th scope="col">Usuario Asginado</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>f140a4db-1e44-4572-9db4-8d61b26d6d1c</th>
			      <th>Computter</th>
			      <th>Trabajando</th>
			      <th>Demo Client</th>
			      <th>1 Months DTV</th>
			      <th>2 weeks ago</th>
			      <th>2 weeks ago</th>
			      <th>Suscripciones</th>
			      <th></th>
			    </tr>
			</tbody>
		  </table>
		  <nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li class="page-item inactive"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
		</div>

	  </div>
	  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	  	<br>
	  	<div class="table-responsive">
		  <table class="table table-bordered">
		    <thead class="thead-light">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Tema</th>
			      <th scope="col">Estado</th>
			      <th scope="col">Propietario</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Creado en</th>
			      <th scope="col">Actualizado en</th>
			      <th scope="col">Secciones</th>
			      <th scope="col">Usuario Asginado</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>f140a4db-1e44-4572-9db4-8d61b26d6d1c</th>
			      <th>Computter</th>
			      <th>Cerrado</th>
			      <th>Demo Client</th>
			      <th>1 Months DTV</th>
			      <th>2 weeks ago</th>
			      <th>2 weeks ago</th>
			      <th>Suscripciones</th>
			      <th></th>
			    </tr>
			</tbody>
		  </table>
		  <nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li class="page-item inactive"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>
		</div>
	  </div>
	</div>
	  
@endsection