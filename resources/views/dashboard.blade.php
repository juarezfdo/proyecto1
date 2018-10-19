<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Dashboard</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	
    <div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
	  	<ul class="list-unstyled components">
        <p class="text-center h4"><i class="fa fa-dashboard"></i> Dashboard</p>
        Acceso Rápido
        <li> 
            <a href="/tickets"><i class="material-icons">contact_support</i> Tickets de Soporte</a>
        </li>
        <li>
            <a href="/servicio"><i class="material-icons">build</i> Peticiones de Servicio</a>
        </li>
        <li>
            <a href="/tareas"><i class="material-icons">assignment</i> Mis Tareas</a>
        </li>
        <hr>
        Administración
        <li>
            <a href="/proyectos"><i class="material-icons">work</i> Proyectos</a>
        </li>
        <li>
            <a href="/servicios"><i class="material-icons">storage</i> Servicios</a>
        </li>
        <li>
            <a href="/productos"><i class="material-icons">view_list</i> Productos</a>
        </li>
        <li>
            <a href="/soporte"><i class="material-icons">event_seat</i> Departamentos de Soporte</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">business</i> Compañias/Clientes</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">note</i> Facturas</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">person</i> Usuarios</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">find_in_page</i> Menu & Paginas</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">payment</i> Pagos</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">feedback</i> FAQ's</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">book</i> Posts del Blog</a>
        </li>
        <li>
            <a href="#"><i class="material-icons">question_answer</i> Comentarios en Blog</a>
        </li>
      </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
	    @yield('body')
    </div>
    <br>
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>
</div> 
</body>
</html>