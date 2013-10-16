<html>
<head>

<?php include("bootstrap.txt"); ?>


</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Llista Usuaris</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="createusers">Registrat</a></li>
            <li><a href="createusers">Canvia contrasenya</a></li>
            <li><a href="modifyusers">Modifica l'usuari</a></li>
            <li><a href="/codeigniterhelloworld/application/views/pagina.php">Menu Principal</a></li>
          </ul>
        </div>
      </div>
      </div>
<div>
</div>
</br>
</br>
</br>
</br>
Encara no ets membre fes click aqui <a href="createusers"><input type="button" class="btn btn-sm btn-success"  name="boton" value="Registrat"/></a></br>
<table id="taula" class="table table-hover table-condensed" border="1">
<thead>
        <tr>
	    <th>id</th>
            <th>Usuari</th>
            <th>Email</th>
            <th>Data naixement</th>
            <th>Banejat</th>
	    <th>Opcions</th>
	
        </tr>
    </thead>
    <tbody>
        <tr>
	    <td>1</td>
            <td>Albert Canyelles</td>
            <td>albertcanelles@iesebre.com</td>
            <td>19/03/1993</td>
            <td>No</td>
   	    <td><a href="modifyusers/1"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="deleteusers/1"><input type="button" class="btn btn-sm btn-danger" name="boton" value="Eliminar"/></td></a>	
        </tr>
        <tr>
	    <td>2</td>
            <td>Josep Borrell Sanchez</td>
            <td>josepborrell@iesebre.com</td>
            <td>12/09/1993</td>
            <td>No</td>
	    <td><a href="modifyusers/2"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="deleteusers/2"><input type="button" name="boton" class="btn btn-sm btn-danger" value="Eliminar"/></td></a>
        </tr>
        <tr>
	    <td>3</td>
	    <td>Manuel Blanch Garzon</td>
	    <td>manuelblanch@iesebre.com</td>
	    <td>25/09/1980</td>
	    <td>Si</td>
	    <td><a href="modifyusers/3"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="deleteusers/3"><input type="button" name="boton" class="btn btn-sm btn-danger" value="Eliminar"/></td></a>
        </tr>
    </tbody>
</table>

<footer>
        <p align="center">&copy; Albert Canelles Panisello</p>
        <p><?php echo $hello;?></p>
	</footer>
</body>

</html>
