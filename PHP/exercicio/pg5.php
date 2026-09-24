<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>
<body>
    <h1>
        piscina
    </h1>
    <form action="forms.act.php" method="post">
        <p>qual a altura da piscina </p>
        <input type="text" name="alt">
         <p>qual a largura da piscina </p>
        <input type="text" name="lar">
         <p>qual a profundidade da piscina </p>
        <input type="text" name="prof">
        <input type="submit" value="caucular">
    </form>
    <?php
     @session_start();
    if(isset($_SESSION['pinto'])){
        echo $_SESSION['pinto'];
        unset($_SESSION['pinto']);
    }
    ?>
</body>
</html>