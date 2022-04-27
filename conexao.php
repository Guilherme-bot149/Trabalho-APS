<?php
define('HOST', 'IP DO BANCO DE DADOS');
define('USUARIO',  'root');
define('SENHA', 'root');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar')
