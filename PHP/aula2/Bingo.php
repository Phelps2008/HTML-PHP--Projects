<?php

    session_start();

    if (!isset($_SESSION['numeros'])) {
        $_SESSION['numeros'] = range(1, 75);
        shuffle($_SESSION['numeros']);


        $_SESSION['sorteados'] = [];
    }

    if (isset($_POST['btnSortear'])) {

 
        if (count($_SESSION['numeros']) > 0) {


            $numero = array_shift($_SESSION['numeros']);

         
            $_SESSION['sorteados'][] = $numero;
        }
    }

    if (isset($_POST['btnLimpar'])) {

        session_destroy();

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo dos cria LOL</title>
    <link rel="stylesheet" href="Bingo.css">
</head>

<body>

    <form method="post">
        <input type="submit" name="btnSortear" value="Sortear">
        <input type="submit" name="btnLimpar" value="Limpar">
    </form>

    <div class="pai">

        <div class="card">
            <p>B</p>

            <?php

            foreach ($_SESSION['sorteados'] as $numero) {

                if ($numero >= 1 && $numero <= 15) {
                    echo "<span>$numero</span>";
                }
            }
            ?>
        </div>

        <div class="card">
            <p>I</p>

            <?php

            foreach ($_SESSION['sorteados'] as $numero) {

                if ($numero >= 16 && $numero <= 30) {
                    echo "<span>$numero</span>";
                }
            }
            ?>
        </div>

        <div class="card">
            <p>N</p>
            <?php

            foreach ($_SESSION['sorteados'] as $numero) {

                if ($numero >= 31 && $numero <= 45) {
                    echo "<span>$numero</span>";
                }
            }
            ?>
        </div>

        <div class="card">
            <p>G</p>

            <?php

            foreach ($_SESSION['sorteados'] as $numero) {

                if ($numero >= 46 && $numero <= 60) {
                    echo "<span>$numero</span>";
                }
            }
            ?>
        </div>

        <div class="card">
        <p>O</p>
            <?php

    foreach ($_SESSION['sorteados'] as $numero) {
        if ($numero >= 61 && $numero <= 75) {
                    echo "<span>$numero</span>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>