<html>
<head>
<title>Pag decod</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link href="estdec.css" type="text/css" rel="stylesheet" media="">
</head>
<body>
<h1>Decodificador de texto</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
Pon aquí tu texto:<br>
<textarea cols="100" rows="8" name="comment" placeholder="Pega tu texto aquí"></textarea><br>
<br>
<input type="submit" value="Decodificar">
</form>
<h3>Texto decodificado:</h3>

<div>
<?php

//Guarda el nombre del archivo en la variable
$file ="text2.txt";

//$pattern = '/[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,4}\b/i';
//preg_match ( $pattern, $file, $matches );
//print_r($matches);
//¿variable comment definida? ¿Nombre e e-mail no estan vacios?
//if isset($_POST['comment']) && $_POST['name'] ! = "" && $_POST['email'] != "" {
if (isset($_POST['comment']) ) {
$comment = $_POST['comment'];

//El archivo se abre para escritura-lectura
$fp = fopen($file, "r+");
//Leer todos los datos y almacenar en $old
$old = fread ($fp, filesize($file));
//

//
//Ocultar caracteres html, eliminar slashes, mantener saltos de linea
$comment = htmlspecialchars($comment);
// $comment = stripslashes(n12br($comment));
$comment = stripslashes($comment);

//...............................................................................
echo urldecode("$comment") . "\n";
//...............................................................................
$entry="<p>$comment</p>\n";
//El cursor invisible salta al principio
rewind($fp);
//Escribir en la nueva entrada 
fputs($fp, "$entry");
//cerrar rl archivo
fclose($fp);
}
//Mostrar el archivo completo
//readfile($file);
?>
</div>
</body>
</html>