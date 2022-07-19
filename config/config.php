<?php
DEFINE('SERVIDOR', 'localhost');
DEFINE('USUARIO', 'root');
DEFINE('SENHA', '');
DEFINE('NOMEBANCO', 'cadastro');

$conn = new mysqli(SERVIDOR, USUARIO, SENHA, NOMEBANCO) or die ('Erro fatal da morte');
?>