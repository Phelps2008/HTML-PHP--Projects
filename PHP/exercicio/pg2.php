<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>
<body>
    <h1>Celcius para Fahrenheit</h1>
    <form action="forms.act.php" method="post">
        <p>Digite a temperatura em celcius:</p>
        <p><input type="text" name="num2" id=""></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
    @session_start();
    if(isset($_SESSION['resultado'])){
        echo $_SESSION['resultado'];
        unset($_SESSION['resultado']);
    }
    ?>
</body>
</html>