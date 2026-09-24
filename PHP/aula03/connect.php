<?php
$base = "bd_carros";
$bancoUrl = "localhost";
$user = "root";
$senha = '';

$con = mysqli_connect($bancoUrl, $user, $senha, $base);

mysqli_query($con, "SET NAMES utf8");
?>