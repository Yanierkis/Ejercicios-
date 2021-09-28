<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","") or
die("Problemas en la conexion");
mysqli_select_db($conexion,"phpfacil") or
die("Problemas en la selección de la base de datos");
$registros=mysqli_query($conexion,"select * from alumnos
where mail='$_REQUEST[mail]'") or
die("Problemas en el select:".mysqli_error($conexion));
if ($regalu=mysqli_fetch_array($registros))
{
?>
<form action="pagina10.php" method="post">
<input type="hidden" name="mailviejo" value="<?php
echo $regalu['mail'] ?>">
<select name="codigocurso">
	<option value="1">PHP</option>
<option value="2">ASP</option>
<option value="3">JSP</option>
	</select>
<?php
$registros=mysqli_query($conexion,"select * from cursos") or
die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
if ($regalu['codigocurso']==$reg['codigo'])
echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecur]</option>";
else
echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
}
?>

<br>
<input type="submit" value="Modificar">
</form>
<?php
}
else
echo "No existe alumno con dicho mail";
?>
</body>
</html>