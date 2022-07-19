<?php
DEFINE('SERVIDOR', 'localhost');
DEFINE('USUARIO', 'u339285869_root');
DEFINE('SENHA', '|rNJ+/qxu0');
DEFINE('NOMEBANCO', 'u339285869_cadastro');

$conn = new mysqli(SERVIDOR, USUARIO, SENHA, NOMEBANCO) or die ('Erro fatal da morte');
?>