<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina8.php" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:
<select name="codigocurso">
<option value="1">PHP</option>
<option value="2">ASP</option>
<option value="3">JSP</option>
</select>
<br>
<input type="submit" value="Registrar">
</form>
<?php
$conexion=mysqli_connect("localhost","root","") or
die("Problemas en la conexion");
mysqli_select_db($conexion, "phpfacil") or
die("Problemas en la selección de la base de datos");
$registros=mysqli_query($conexion,"select codigo,nombrecur from cursos") or
die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
}
?>

</body>
</html>