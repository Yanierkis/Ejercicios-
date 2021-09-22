function CodelandUsernameValidation(str) { 
var tamano = str.length;
patron = /^[a-zA-Z][a-zA-Z0-9_]*[^_]$/gm;
var result=false;
if(tamano<=25 && tamano>=4){
  result=patron.test(str);
}
  // code goes here  
  return result; 

}
   
// keep this function call here 
console.log(CodelandUsernameValidation(readline()));