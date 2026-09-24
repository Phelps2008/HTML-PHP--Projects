<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        .cu{color:blue;}
        .furo{background-color: wheat}
    </Style>
</head>
<body>
    <?php 
    echo "<h1>Aula PhP</h1>";
    //toda variavel começa com "$"
    $nome = "Felipe";
    var_dump($nome);
    //Operações + - * / % intdiv()
    $telefone = "(11)99999-9999";
    var_dump($telefone);
    $idade = 18;
    var_dump($idade);
    $valor = 10;
    $total = $idade + $valor;
    echo "<p class=\"cu furo\">O valor total somado da sua idade é $total</p>";
    $numero = 1990;
    if($numero%2==0){
        echo "É par";
    }else{
        echo "É impar";
    }
    ?>
</body>
</html>