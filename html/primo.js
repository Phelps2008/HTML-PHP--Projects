function compostos(){
     valor1= document.querySelector('#idValor1').value;
     divisores = 0;
     metade = Math.floor(valor1 / 2)

     while(metade>1){
     if(valor1 % metade == 0){
       divisores++;
        document.querySelector('#divResultado').innerHTML="Composto"; 
     break;
    }
    metade--;
 } 
 if(divisores == 0){
    document.querySelector('#divResultado').innerHTML="Primo";
 }
}