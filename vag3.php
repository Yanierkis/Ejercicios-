<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>

<?php
$b=0; /*Colocamos una variable bandera*/
for ($n=1; $b==0 ; $n++){   /*$n es un contador global de galletas*/

$galletas=$n;
 
 if($galletas%4==1){
 	$total=$galletas-1;
 	$vag1=$total/4;
 	$galletas=3*($total/4);
                if($galletas%4==1){
            	$total=$galletas-1;
            	$vag2=$total/4;
            	$galletas=3*($total/4);
                      if($galletas%4==1){
            	      $total=$galletas-1;
            	      $vag3=$total/4;
            	      $galletas=3*($total/4);
                               if($galletas%4==1){
            	               $total=$galletas-1;
            	               $vag4=$total/4;
            	               $galletas=3*($total/4);
                                          if($galletas%4==1){
            	                          $total=$galletas-1;
            	                          $vag5=$total/4;
            	                          $galletas=3*($total/4);
            	                          echo "El num min es $n <br>";
                                          echo "Perro: 5 <br>";
                                          $v1=$vag1+$vag5;
                                          echo "Vag1: $v1 <br>";
                                          $v2=$vag2+$vag5;
                                          echo "Vag2: $v2 <br>";
                                          $v3=$vag3+$vag5;
                                          echo "Vag3: $v3 <br>";
                                          $v4=$vag4+$vag5;
                                          echo "Vag4: $v4 <br>";
                                          $b=1;
                                      }
                                  }
                              }
                          }

                        }






}

?>

</body>

</html>