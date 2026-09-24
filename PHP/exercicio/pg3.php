<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercico3</title>
    
</head>
<body>
      <h1>ordem crescente</h1>
    <form action="forms.act.php" method="post">
        <p>Digite 3 numeros:</p>
         <p><input type="text" name="val1" id=""></p>
          <p><input type="text" name="val2" id=""></p>
        <p><input type="text" name="val3" id=""></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
    @session_start();
    if(isset($_SESSION['xereca'])){
        echo $_SESSION['xereca'];
        unset($_SESSION['xereca']);
    }
    ?>
</body>
</html>