<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>

<?php
$b=0; /*Colocamos una variable bandera*/
for ($n=0; $b==0 ; $n++){   /*$n es un contador global de galletas*/
	$aux1=$n;                  /*Para no sobreacribir el valor de $n*/
	$check=1;                  /*Luego nos servirá para ver si es entero*/
	for($cont=0;$cont<=4 && $check==1 ;$cont++){    /*Lo que pasa por la noche*/
		$aux2=$aux1-1;                      /*perro*/
		$aux4=$aux2-($aux2/4);        /*Se llevan un cuarto del total más 
      la del perro*/
        
		$aux1=$aux4; 
		$check=is_int($aux1);              /*Comprobar que es un num entero*/
	}
       
	$aux3=($aux1%4);                     /*Al final esto tiene que ser cero*/
	     
	if($cont==5 && $aux3==0){          /*Que los 4 han cogido y al final se cumpla que todos cogen 1/4 y queda una para el perro*/

		$b=1;                             /*Variable bandera a 1*/
		echo "El min num de galletas es $n";
	}


}

?>

</body>

</html>