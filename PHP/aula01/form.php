<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form action="forms.act.php" method="post">
        <p>Digite um número:</p>
        <p><input type="text" name="num1" id=""></p>
        <p>Digite o segundo número:</p>
        <p><input type="text" name="num2" id=""></p>
        <p>Digite o terceiro número:</p>
        <p><input type="text" name="num3" id=""></p>
        <p>Digite o quarto número:</p>
        <p><input type="text" name="num4" id=""></p>
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