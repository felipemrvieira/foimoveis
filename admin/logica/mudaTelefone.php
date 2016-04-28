<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();


 $id = $_GET['id'];
 $campo = $_GET['campo'];
 $tel = $_POST['tel'];


//dao
mudaTelefone($id, $campo, $tel, $conexao);


// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();

session_start();
$_SESSION['usuarioLogado'] = 'admin';

header("location: ../edicaoTelefones.php?id=$id");