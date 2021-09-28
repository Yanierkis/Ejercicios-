<html>
<head>
<title>Condicional Switch</title>
</head>
<body>
<h1>Condicional Switch. Ejemplo</h1>




       <?php
       $i = "arriba";
       echo "La variable posicion es", $i;
       echo "<br>";

      
     switch ($i) {
    case "arriba":
        echo "La variable contiene el valor de arriba<br>";
        break;
    case "abajo":
        echo "La variable contiene el valor de abajo<br>";
        break;
    
}
       
 ?>


</body>
</html>