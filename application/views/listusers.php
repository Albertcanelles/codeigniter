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



</head>
<body>
<table border=2 WIDTH=400 id="taula" >
<thead>
        <tr>
            <th>Usuari</th>
            <th>Email</th>
            <th>Data naixement</th>
            <th>Banejat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Fila 1 camp 1 </td>
            <td>Fila 1 camp 2</td>
            <td>Fila 1 camp 3</td>
            <td>Fila 1 camp 4</td>
        </tr>
        <tr>
            <td>fila 2 camp 1</td>
            <td>fila 2 camp 2</td>
            <td>fila 2 camp 3</td>
            <td>Fila 2 camp 4</td>
        </tr>
        <tr>
			<td>fila 3 camp 1</td>
			<td>fila 3 camp 2</td>
			<td>fila 3 camp 3</td>
			<td>Fila 3 camp 4</td>
        </tr>
    </tbody>
</table>

</body>

</html>
