function multiplicar(){
valor1= document.querySelector('#idValor1').value;
valor2= document.querySelector('#idValor2').value;
produto= valor1 * valor2;
document.querySelector('#divResultado').innerHTML="A diferença é: " + produto;
}
function subtrair(){
    valor1= document.querySelector('#idValor1').value;
    valor2= document.querySelector('#idValor2').value;
    diferenca= valor1 - valor2;
    document.querySelector('#divResultado').innerHTML="A diferença é: " + diferenca;
    }
    function soma(){
        valor1= document.querySelector('#idValor1').value;
        valor2= document.querySelector('#idValor2').value;
        result= valor1 + valor2;
        document.querySelector('#divResultado').innerHTML="A diferença é: " + result;
        }
        function divisão(){
            valor1= document.querySelector('#idValor1').value;
            valor2= document.querySelector('#idValor2').value;
            divs= valor1 / valor2;
            document.querySelector('#divResultado').innerHTML="A diferença é: " + divs;
            }