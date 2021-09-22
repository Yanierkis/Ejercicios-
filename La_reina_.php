<!DOCTYPE html>
<html>
<head>
<title>La reina gana</title>
</head>

<body>

<?php

$cont=0;

for($i=0; $i<100;$i++){
$reina=random_int(1,3);
$mi_carta=random_int(1, 3);

if($reina==$mi_carta){
	echo "Pierdes";
	
}

if($reina!=$mi_carta){
	echo "Ganas";
	$cont=$cont+1;
}

}

echo "<br>";
echo "Prop de ganar es: $cont";



?>

</body>

</html>