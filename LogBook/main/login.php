<?php
// creamos una variable de sesion
session_start();
include 'conecta.php';
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);
//consulta para extraer los datos de la base de datos del alumno
$consulta = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
if ($resultado = $conecta->query($consulta)) {
    while ($row = $resultado->fetch_array()) {
       $userok = $row['Usuario'];
       $password = $row['Password'];

    }
    $resultado->close();
}
$conecta->close();

if (isset($usuario) && isset ($password)) {
    if($usuario == $userok && $password == $passwordok) {
        $_SESSION['Login']= TRUE;
        $_SESSION['Usuario'] = $usuario;
        header("location:../principal.php");
    }
    else{
        header("location:../AplicacionBook.php");
    }
    else{
        header("location:../AplicacionBook.php");
    }
}

?>
