<?php
include('config/config.php');
$conexao = $conn->query ("SELECT * FROM valores "); 
while($dados = $conexao->fetch_array()) { 
    print_r($dados);
}        


?>
