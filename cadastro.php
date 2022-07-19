<?php
include("config\config.php");

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$conn->query("INSERT INTO usuarios (usuario, senha) 
                values('$usuario', '$senha')" );
$conn->commit();


?>