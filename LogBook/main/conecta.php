<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "loogbook";
$conecta = mysqli_connect($servidor,$usuario,$password,$base);
if ($conecta->connect_error) {
    die ('Error en la base de datos '.$conecta->connect_error);
}
  ?>
