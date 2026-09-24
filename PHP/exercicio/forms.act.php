<?php
@session_start();
extract($_POST);
$total = $num1 * 1.8 + 32; 

$_SESSION['resultado'] = $total;
header("location:pg2.php");
?>
<?php 
@session_start();
extract($_POST);
    $msg = "";
   if($num1%2==0){
       $msg = "<p class=par>$num1 é par</p>";
    }else{
       $msg = "<p class=impar>$num1 é ímpar</p>";
    } 
$_SESSION['mensagem'] = $msg;
header("location:pg.php");
?>

<?php 
@session_start();
extract($_POST);
    $final = "";

   
    if ($val1 > $val2 && $val2 > $val3) {
    // 1. val1 > val2 > val3
    $final = "<p>$val1 é maior que $val2, que é maior que $val3</p>";

} elseif ($val1 > $val3 && $val3 > $val2) {
    // 2. val1 > val3 > val2
    $final = "<p>$val1 é maior que $val3, que é maior que $val2</p>";

} elseif ($val2 > $val1 && $val1 > $val3) {
    // 3. val2 > val1 > val3
    $final = "<p>$val2 é maior que $val1, que é maior que $val3</p>";

} elseif ($val2 > $val3 && $val3 > $val1) {
    // 4. val2 > val3 > val1
    $final = "<p>$val2 é maior que $val3, que é maior que $val1</p>";

} elseif ($val3 > $val1 && $val1 > $val2) {
    // 5. val3 > val1 > val2
    $final = "<p>$val3 é maior que $val1, que é maior que $val2</p>";

} elseif ($val3 > $val2 && $val2 > $val1) {
    // 6. val3 > val2 > val1
    $final = "<p>$val3 é maior que $val2, que é maior que $val1</p>";

} elseif ($val1 == $val2 && $val2 == $val3) {
    // 7. Todos iguais
    $final = "<p>Todos os valores são iguais ($val1)</p>";

} elseif ($val1 == $val2 && $val1 > $val3) {
    // 8. val1 e val2 são iguais e maiores que val3
    $final = "<p>$val1 e $val2 são iguais e maiores que $val3</p>";

} elseif ($val1 == $val2 && $val1 < $val3) {
    // 9. val1 e val2 são iguais e menores que val3
    $final = "<p>$val1 e $val2 são iguais e menores que $val3</p>";

} elseif ($val1 == $val3 && $val1 > $val2) {
    // 10. val1 e val3 são iguais e maiores que val2
    $final = "<p>$val1 e $val3 são iguais e maiores que $val2</p>";

} elseif ($val1 == $val3 && $val1 < $val2) {
    // 11. val1 e val3 são iguais e menores que val2
    $final = "<p>$val1 e $val3 são iguais e menores que $val2</p>";

} elseif ($val2 == $val3 && $val2 > $val1) {
    // 12. val2 e val3 são iguais e maiores que val1
    $final = "<p>$val2 e $val3 são iguais e maiores que $val1</p>";

} else {
    // 13. val2 e val3 são iguais e menores que val1
    $final = "<p>$val2 e $val3 são iguais e menores que $val1</p>";
}

echo $final;
   
$_SESSION['xereca'] = $final;
header("location:pg3.php");
?>
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
<?php 
@session_start();
extract($_POST);
    $negro = "";
    $litros= "";
 $litros = ($alt * $prof * $lar);
 $negro = ($litros / 1000);

     "<p class= o volume é de $negro</p>";
$_SESSION['pinto'] = $negro;
header("location:pg5.php");
?>
