@extends('dashboard')

@section('body')
	<h3>Aministrar Productos</h6>
	<hr>
	<br>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Activo</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inactivo</a>
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
			      <th scope="col">Estado</th>
			      <th scope="col">Creado en</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>adam test</th>
			      <th>Activo</th>
			      <th>Fri 31th January 2018</th>
			      <th><a class="btn btn-default btn-xs lw-btn" title="Actualizar Estado" href=""><i class="fa fa-pencil-square-o"></i> Editar</a>
			      	<a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
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
			      <th scope="col">Estado</th>
			      <th scope="col">Creado en</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>adam test</th>
			      <th>Activo</th>
			      <th>Fri 31th January 2018</th>
			      <th><a class="btn btn-default btn-xs lw-btn" title="Actualizar Estado" href=""><i class="fa fa-pencil-square-o"></i> Editar</a>
			      	<a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
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