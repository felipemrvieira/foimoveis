<?php
include 'dao/operacoesDAO.php';
include 'dao/conexao.php';

session_start();


$pasta = 'uploads/'.$_POST['nome'];
$uploaddir = $pasta;
$uploadfile = $uploaddir . basename($_FILES['logo']['name']);



$_SESSION['endereco_logo'] = "semend";


if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile)) {
    $_SESSION['endereco_logo'] = $_POST['nome'].$_FILES['logo']['name'];
    /*    echo "Arquivo válido e enviado com sucesso.\n";
    echo $_FILES['logo']['tmp_name'];
    echo "<br>";
    echo $_FILES['logo']['name'];*/
}

for($i=1; $i<=15; $i++){
    $uploadfile = $uploaddir . basename($_FILES['foto_imovel'.$i]['name']);
    if (move_uploaded_file($_FILES['foto_imovel'.$i]['tmp_name'], $uploadfile)) {
        $_SESSION['endereco_foto'.$i] = $_POST['nome'].$_FILES['foto_imovel'.$i]['name'];
        /*    echo "Arquivo válido e enviado com sucesso.\n";
        echo $_FILES['logo']['tmp_name'];
        echo "<br>";
        echo $_FILES['logo']['name'];*/
    }
}

$ap = pegaAp();
$ap['extras'] = validaExtras();

//dao
$_SESSION['idImovel'] = cadastraAp($ap, $conexao);



header("location: ../admin.php");


//  --------     funcoes      ------

function pegaAp(){
    $ap['nome'] = $_POST['nome'];
    $ap['bairro'] = $_POST['bairro'];
    $ap['valor'] = $_POST['valor'];
    $ap['desconto_imovel'] = $_POST['desconto_imovel'];
    $ap['quartos'] = $_POST['quartos'];
    $ap['tipo'] = $_POST['tipo'];
    $ap['video'] = $_POST['video'];
    $ap['lat'] = $_POST['lat'];
    $ap['longt'] = $_POST['longt'];
    $ap['col1'] = $_POST['col1'];
    $ap['col2'] = $_POST['col2'];
    
    $ap['titulocurva1'] = $_POST['titulocurva1'];
    $ap['textocurva1'] = $_POST['textocurva1'];
    
    $ap['titulocurva2'] = $_POST['titulocurva2'];
    $ap['textocurva2'] = $_POST['textocurva2'];
    
    $ap['titulocurva3'] = $_POST['titulocurva3'];
    $ap['textocurva3'] = $_POST['textocurva3'];
    
    $ap['titulocurva4'] = $_POST['titulocurva4'];
    $ap['textocurva4'] = $_POST['textocurva4'];
    
    $ap['legendaplanta1'] = $_POST['legendaplanta1'];
    $ap['legendaplanta2'] = $_POST['legendaplanta2'];
    $ap['legendaplanta3'] = $_POST['legendaplanta3'];
    $ap['legendaplanta4'] = $_POST['legendaplanta4'];
    
    $ap['endereco_logo'] = $_SESSION['endereco_logo'];
    
    for($i=1; $i<=16; $i++){
        if(isset($_SESSION['endereco_foto'.$i])){
            $ap['endereco_foto'.$i] = $_SESSION['endereco_foto'.$i];    
        }else{
            $ap['endereco_foto'.$i] = 'vazio';
        }
        
            
        
    }
    
//    $ap['endereco_foto1'] = $_SESSION['endereco_foto1'];
//    $ap['endereco_foto2'] = $_SESSION['endereco_foto2'];
//    $ap['endereco_foto3'] = $_SESSION['endereco_foto3'];
//    $ap['endereco_foto4'] = $_SESSION['endereco_foto4'];
//    $ap['endereco_foto5'] = $_SESSION['endereco_foto5'];
//    $ap['endereco_foto6'] = $_SESSION['endereco_foto6'];
//    $ap['endereco_foto7'] = $_SESSION['endereco_foto7'];
//    $ap['endereco_foto8'] = $_SESSION['endereco_foto8'];
//    $ap['endereco_foto9'] = $_SESSION['endereco_foto9'];
//    $ap['endereco_foto10'] = $_SESSION['endereco_foto10'];
//    //foto da capa
//    $ap['endereco_foto11'] = $_SESSION['endereco_foto11'];
    
    //plantas
//    $ap['planta1'] = $_SESSION['endereco_foto12'];
//    $ap['planta2'] = $_SESSION['endereco_foto13'];
//    $ap['planta3'] = $_SESSION['endereco_foto14'];
//    $ap['planta4'] = $_SESSION['endereco_foto15'];
    
    $ap['memorial'] = $_POST['memorial'];
    $ap['tabela'] = $_POST['tabela'];
    $ap['linkinteresse'] = $_POST['linkinteresse'];
    
    
    
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

function exibeExtras($extra){
    echo 'piscina';
        echo '<br>';
        echo $extra['piscina'];
        echo '<br>';

    echo 'academia';
            echo '<br>';
            echo $extra['academia'];
            echo '<br>';

    echo 'salao';
            echo '<br>';
            echo $extra['salao'];
            echo '<br>';

}

echo $ap['nome'].' cadastrado com sucesso com o id '.$_SESSION['idImovel'];
echo '<br>';


// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();


session_start();
$_SESSION['usuarioLogado'] = 'admin';
