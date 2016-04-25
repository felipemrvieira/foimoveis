<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();

$endereco = pegaEndereco();
//dao
cadastraEndereco($endereco, $conexao);

header("location: ../admin.php?status=ok");


//  --------     funcoes      ------

function pegaEndereco(){
    
    $endereco['idImovel'] = $_SESSION['idImovel'];
    $endereco['cidade'] = $_POST['cidade'];
    $endereco['bairro'] = $_POST['bairro'];
    $endereco['rua'] = $_POST['rua'];
    $endereco['numero'] = $_POST['numero'];
    
    return $endereco;
}
