@extends('dashboard')

@section('body')
	<h3>Aministrar Proyectos</h6>
	<hr>
	<br>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Activo</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inactivo</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Borrado</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<br>
	  	<div class="table-responsive">
		  <table class="table table-bordered">
		    <thead class="thead-light">
			    <tr>
			      <th scope="col">Titulo</th>
			      <th scope="col">Empresa</th>
			      <th scope="col">Fecha de Inicio</th>
			      <th scope="col">Fecha de Vencimiento</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>adam test</th>
			      <th>Ejemplo de Empresa</th>
			      <th>Fri 12th January 2018</th>
			      <th>Fri 31th January 2018</th>
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
			      <th scope="col">Titulo</th>
			      <th scope="col">Empresa</th>
			      <th scope="col">Fecha de Inicio</th>
			      <th scope="col">Fecha de Vencimiento</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>adam test</th>
			      <th>Ejemplo de Empresa</th>
			      <th>Fri 12th January 2018</th>
			      <th>Fri 31th January 2018</th>
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
			      <th scope="col">Titulo</th>
			      <th scope="col">Empresa</th>
			      <th scope="col">Fecha de Inicio</th>
			      <th scope="col">Fecha de Vencimiento</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>adam test</th>
			      <th>Ejemplo de Empresa</th>
			      <th>Fri 12th January 2018</th>
			      <th>Fri 31th January 2018</th>
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