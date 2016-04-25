<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();
$_SESSION['idImovel'] = $_GET['id'];

$ap = pegaAp();
$ap['extras'] = validaExtras();

//dao

echo editaAp($ap, $conexao);

header("location: ../editarImovel.php");


//  --------     funcoes      ------

function pegaAp(){
    
    $ap['id'] = $_SESSION['idImovel'];
    $ap['nome'] = $_POST['nome'];
    $ap['bairro'] = $_POST['bairro'];
    $ap['valor'] = $_POST['valor'];
    $ap['desconto_imovel'] = $_POST['desconto_imovel'];
    $ap['quartos'] = $_POST['quartos'];
    $ap['tipo'] = $_POST['tipo'];
    
    $ap['col1'] = $_POST['col1'];
    $ap['col2'] = $_POST['col2'];
    
    $ap['lat'] = $_POST['lat'];
    $ap['longt'] = $_POST['longt'];
    
    $ap['legendaplanta1'] = $_POST['legendaplanta1'];
    $ap['legendaplanta2'] = $_POST['legendaplanta2'];
    $ap['legendaplanta3'] = $_POST['legendaplanta3'];
    $ap['legendaplanta4'] = $_POST['legendaplanta4'];
    
    $ap['video'] = $_POST['video'];
    
    
    $ap['titulocurva1'] = $_POST['titulocurva1'];
    $ap['textocurva1'] = $_POST['textocurva1'];
    
    $ap['titulocurva2'] = $_POST['titulocurva2'];
    $ap['textocurva2'] = $_POST['textocurva2'];
    
    $ap['titulocurva3'] = $_POST['titulocurva3'];
    $ap['textocurva3'] = $_POST['textocurva3'];
    
    $ap['titulocurva4'] = $_POST['titulocurva4'];
    $ap['textocurva4'] = $_POST['textocurva4'];
    
    
    $ap['memorial'] = $_POST['memorial'];
    $ap['tabela'] = $_POST['tabela'];
    $ap['linkinteresse'] = $_POST['linkinteresse'];
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

