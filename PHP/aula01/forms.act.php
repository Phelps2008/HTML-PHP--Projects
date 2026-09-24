<?php
//todo arquivo que usa sessão, precisa do session_start();
@session_start();
//var_dump($_POST);
//extrair para variaveis comuns
extract($_POST);
$total = $num1 + $num2 + $num3 + $num4;

$_SESSION['resultado'] = $total;

//redirecionamento
header("location:form.php");