<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();
$_SESSION['idImovel'] = $_GET['id'];

//dao

echo excluiAp($_SESSION['idImovel'], $conexao);

header("location: ../editarImovel.php");