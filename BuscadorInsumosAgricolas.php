<HTML class="bg-black">
	<head>
        <meta charset="UTF-8">
        <!-- <title>AdminLTE | Buscador </title> -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<title>Buscador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>		 	
    </head>
	<body>

<h1> </h1>
<div class="container">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Tipo:Insumos agricolas
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="menu.php"><a role="menuitem" tabindex="-1" href="BuscadorAlimenticios.php">Alimenticios</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="BuscadorPrecuarios.php">Pecuarios</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="BuscadorTodos.php">Todos</a></li>  
    </ul>
  </div>
</div>
<div class="pull-right">
 <a href="menu.php"><button type="button" class="btn btn-info">Menu</button>
</div>

<h1> </h1>
<form class="form-inline mr-auto">
  <input class="form-control mr-sm-2" type="text" placeholder="Nombre de empresa" aria-label="Search">
  <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      

    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
