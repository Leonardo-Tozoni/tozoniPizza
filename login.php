<?php
session_start();
include ('config/config.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.html');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select id, usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";

$resultado = mysqli_query($conn, $query);

$row = mysqli_num_rows($resultado);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}else{
    $_SESSION['erro'] = true;
    header('Location: login.html');
    exit();
}