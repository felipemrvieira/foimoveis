<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

$page['regulamento'] = $_POST['regulamento'];
$page['termos'] = $_POST['termos'];
$page['politica'] = $_POST['politica'];

cadastraPage($page, $conexao);

header("location: ../admin.php");