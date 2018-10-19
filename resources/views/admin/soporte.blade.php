@extends('dashboard')

@section('body')
	<h3>Administrar departamentos de soporte</h6>
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
			      <th scope="col">Usuarios</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>111</th>
			      <th>Fulano</th>
			      <th><a href="#" class="btn btn-xs btn-default lw-btn"><i class="fa fa-support"> </i> Ticket de soporte          </a><a href="#" title="Editar departamento de soporte"class="btn btn-xs btn-default lw-btn"><i class="fa fa-pencil-square-o"></i> Editar</a> <a href="#" class="btn btn-xs btn-default lw-btn"><i class="fa fa-plus"></i> Asignar usuario</a><a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
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
			      <th scope="col">Usuarios</th>
			      <th scope="col">Acción</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>	
			      <th>111</th>
			      <th>Fulano</th>
			      <th><a href="#" class="btn btn-xs btn-default lw-btn"><i class="fa fa-support"> </i> Ticket de soporte          </a><a href="#" title="Editar departamento de soporte"class="btn btn-xs btn-default lw-btn"><i class="fa fa-pencil-square-o"></i> Editar</a> <a href="#" class="btn btn-xs btn-default lw-btn"><i class="fa fa-plus"></i> Asignar usuario</a><a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
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