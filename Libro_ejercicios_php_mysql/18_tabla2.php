<html>
<head>
<title>Tabla condicional 2</title>
</head>
<body>
<h1>Tabla condicional 2</h1>
<?php
/* Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos
mostrar en rojo, y los valores positivos en azul */
/* Variacion. Un color diferente cada fila que se imprima */


function muestra($valor,$r) {

if ($r % 2){
$fondo = "black";
}
else{
$fondo = "white";
}
if ($valor < 0){
$color = "red";
}
else{
$color = "blue";
}
echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";

}


?>
<table border="1">
<?php

for ($x=0,$r = 1; $x<=2; $x+=0.01, $r+=1){
echo "<tr>";
muestra($x,$r);
muestra(sin($x),$r);
muestra(cos($x),$r);
echo "</tr>";
}
?>
</body>
</html>