<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
    <style>
        .par{
            background-color: green;
        }
        .impar{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Par ou Ímpar?:</h1>
    <form action="forms.act.php" method="post">
        <p>Digite o número:</p>
        <p><input type="text" name="num1" id=""></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
    @session_start();
    if(isset($_SESSION['mensagem'])){
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
    ?>
</body>
</html>