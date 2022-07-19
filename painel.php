<?php
session_start();
if (!$_SESSION['usuario']){
    header('Location: login.html');
    exit();
}
?>

<h2><?php echo $_SESSION['usuario'];?></h2>
<h2><a href='logout.php'>sair</a></h2>