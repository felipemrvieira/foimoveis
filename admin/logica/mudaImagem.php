<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();


$pasta = 'uploads/'.$_POST['nome'];
$uploaddir = $pasta;




$uploadfile = $uploaddir . basename($_FILES['img']['name']);
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo $nome = $_SESSION['img'] = $_POST['nome'].$_FILES['img']['name'];

}


echo $id = $_GET['id'];
echo $campo = $_GET['campo'];


//dao
mudaImagem($id, $nome, $campo, $conexao);


// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();

session_start();
$_SESSION['usuarioLogado'] = 'admin';

header("location: ../edicaoImagens.php?id=$id");