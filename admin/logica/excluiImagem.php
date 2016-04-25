<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();



echo $id = $_GET['id'];
echo $campo = $_GET['campo'];


//dao
excluiImagem($id, $campo, $conexao);


// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();

session_start();
$_SESSION['usuarioLogado'] = 'admin';

header("location: ../edicaoImagens.php?id=$id");