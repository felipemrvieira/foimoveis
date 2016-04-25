<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';
session_start();

$id = $_GET['id'];
$ap = pegaAp();
$ap['extras'] = validaExtras();

//dao
alteraAp($ap, $conexao);
header("location: ../form.editarEndereco.php?id=$id");

//---------------------

function pegaAp(){
    $ap['id'] = $id;
    $ap['nome'] = $_POST['nome'];
    $ap['valor'] = $_POST['valor'];
    $ap['quartos'] = $_POST['quartos'];
    $ap['tipo'] = $_POST['tipo'];
    $ap['status'] = $_POST['status'];
    
    return $ap;
}

function validaExtras(){
    
    if(isset($_POST['piscina'])){
        $extra['piscina'] = 's';
    }else{
        $extra['piscina'] = 'n';
        }

    if(isset($_POST['salao'])){
        $extra['salao'] = 's';
    }else{
        $extra['salao'] = 'n';
        }

    if(isset($_POST['academia'])){
        $extra['academia'] = 's';
    }else{
        $extra['academia'] = 'n';
    }
    
    echo '------------------------------------------'.'<br>';
    return $extra;
    
}
//header("location: ../form.editarImovel.php?id=$id");