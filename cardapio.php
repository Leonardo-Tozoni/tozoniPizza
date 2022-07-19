<?php
include('config/config.php')
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Retorno</title>
</head>
<body>
    <table>
        <tr>
            <td>Ingrediente</td>
            <td>preço</td>
    <?php 
        $conexao = $conn->query ("SELECT * FROM valores "); 
        while($dados = $conexao->fetch_array()) { ?>
            <tr>
            <td><?php echo $dados["ingrediente"];?></td>
            <td>R$<?php echo $dados["valor"];?></td>
            </tr>
            
        <?php }  ?>

        </table>