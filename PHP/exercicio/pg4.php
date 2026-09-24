<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>
<body>
     <h1>Primo ou Composto?:</h1>
    <form action="form.act.php" method="post">
        <p>Digite o número:</p>
        <p><input type="text" name="vadia1" id=""></p>
        <p><input type="submit" value="testar"></p>
    </form>
    <?php
    @session_start();
    if(isset($_SESSION['joaolindo'])){
        echo $_SESSION['joaolindo'];
        unset($_SESSION['joaolindo']);
    }
    ?>
</body>
</html>