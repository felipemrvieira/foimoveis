<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();


$pasta = 'uploads/'.$_POST['nome'];
$uploaddir = $pasta;



for($i=0; $i<=15; $i++){
    $uploadfile = $uploaddir . basename($_FILES['foto_imovel'.$i]['name']);
    if (move_uploaded_file($_FILES['foto_imovel'.$i]['tmp_name'], $uploadfile)) {
        $_SESSION['endereco_foto'.$i] = $_POST['nome'].$_FILES['foto_imovel'.$i]['name'];
        
    }
}


$id = $ap['id'] = $_GET['id'];
$ap = pegaAp();


//dao
editaImagens($id, $ap, $conexao);


// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();

session_start();
$_SESSION['usuarioLogado'] = 'admin';

header("location: ../admin.php");


//  --------     funcoes      ------

function pegaAp(){
    
    for($i=0; $i<=15; $i++){
        if(isset($_SESSION['endereco_foto'.$i])){
            echo $i;
            echo '<br>';
            echo $ap['endereco_foto'.$i] = $_SESSION['endereco_foto'.$i];
            echo '<br>';echo '<br>';
        }else{
            $ap['endereco_foto'.$i] = 'vazio';
        }
    }
    
    return $ap;
}
