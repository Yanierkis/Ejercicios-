<?php 

function FirstFactorial($num) {

$result = 1;
for($i=1;$i<=$num;$i++){

    $result*=$i;
    
}
  // code goes here
  return $result;

}
   
// keep this function call here  
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));  

?>