<html>
<head>
<title>MySQL 02 - Consulta BD con tabla (Agenda)</title>
</head>
<body>
<h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1>

<?php
$dp = mysqli_connect("localhost", "root", "" );
mysqli_select_db($dp, "agenda");
$sql = "SELECT * FROM direcciones" ;
$resultado = mysqli_query($dp, $sql);
$campos = mysqli_num_fields($resultado);
$filas = mysqli_num_rows($resultado);
echo "<p>Cantidad de filas: $filas</p>\n";
echo "<table border='1' cellspacing='0'>\n"; //Empezar tabla
echo "<tr>"; //Crear fila
for ($i = 0; $i < $campos; $i++) {
 $properties = mysqli_fetch_field_direct($result, $i);
 $nombrecampo = is_object($properties) ? $properties->name : null;
echo "<th>$nombrecampo</th>";
}
echo "</tr>\n"; //Cerrar fila
while ($row = mysqli_fetch_assoc($resultado)) {
echo "<tr>"; //Crear fila
foreach ($row as $key => $value) {
echo "<td>$value&nbsp;</td>";
}
echo "</tr>\n"; //Cerrar fila
}
echo "</table>\n"; //Cerrar tabla
mysqli_close($dp);
?>
</body>
</html>