<html>
<head>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $('#taula').dataTable();
 } );
</script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/media/css/demo_table.css">
<link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/media/css/demo_page.css">

<t1> Encara no ets membre fes click aqui <a href="createusers"><input type="button" name="boton" value="Registrat"/> </t1></a></br>
</head>
<body>
<table id="taula" class="display" border="1">
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
   	    <td><a href="modifyusers/1"><input type="button" name="boton" value="Modificar"/></a>
	    <a href="deleteusers/1"><input type="button" name="boton" value="Eliminar"/></td></a>	
        </tr>
        <tr>
	    <td>2</td>
            <td>Josep Borrell Sanchez</td>
            <td>josepborrell@iesebre.com</td>
            <td>12/09/1993</td>
            <td>No</td>
	    <td><a href="modifyusers/2"><input type="button" name="boton" value="Modificar"/></a>
	    <a href="deleteusers/2"><input type="button" name="boton" value="Eliminar"/></td></a>
        </tr>
        <tr>
	    <td>3</td>
	    <td>Manuel Blanch Garzon</td>
	    <td>manuelblanch@iesebre.com</td>
	    <td>25/09/1980</td>
	    <td>Si</td>
	    <td><a href="modifyusers/3"><input type="button" name="boton" value="Modificar"/></a>
	    <a href="deleteusers/3"><input type="button" name="boton" value="Eliminar"/></td></a>
        </tr>
    </tbody>
</table>


</body>

</html>
