<?php 
@session_start();
extract($_POST);
$xeroly = "";
if (isset($vadia1)) {
    // Exemplo de lógica simplificada de teste
    $ehPrimo = true;
    if ($vadia1 < 2) {
        $ehPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($vadia1); $i++) {
            if ($vadia1 % $i == 0) {
                $ehPrimo = false;
                break;
            }
        }
    }

    if ($ehPrimo) {
        $xeroly = "<p class='par'>$vadia1 é primo</p>";
    } else {
        $xeroly = "<p class='impar'>$vadia1 é composto</p>";
    } 
}

$_SESSION['joaolindo'] = $xeroly;
header("location:pg4.php");
?>