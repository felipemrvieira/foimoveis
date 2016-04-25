<?php

function cadastraAp($ap, $conexao){
    
   $query = "insert into imovel (nome_imovel, bairro_imovel, tipo_imovel, video, lat, longt,  valor_imovel, desconto_imovel,  qtd_quartos, piscina, academia, salao, col1, col2, endereco_logo,
   endereco_foto1, endereco_foto2,endereco_foto3, endereco_foto4, endereco_foto5, endereco_foto6, endereco_foto7, endereco_foto8, endereco_foto9, endereco_foto10, endereco_foto_capa, planta1, planta2, planta3, planta4, legendaplanta1,legendaplanta2,legendaplanta3,legendaplanta4, titulocurva1, textocurva1, titulocurva2, textocurva2, titulocurva3, textocurva3, titulocurva4, textocurva4, linkinteresse,  memorial, tabela,
   status) values (
   
   '{$ap['nome']}', 
   '{$ap['bairro']}', 
   '{$ap['tipo']}',  
   '{$ap['video']}', 
   '{$ap['lat']}', 
   '{$ap['longt']}', 
   '{$ap['valor']}', 
   
   '{$ap['desconto_imovel']}', 
   '{$ap['quartos']}', 
   '{$ap['extras']['piscina']}', 
   '{$ap['extras']['academia']}', 
   '{$ap['extras']['salao']}', 
   '{$ap['col1']}',
   '{$ap['col2']}', 
   '{$ap['endereco_logo']}',
   
   '{$ap['endereco_foto1']}',
   '{$ap['endereco_foto2']}',
   '{$ap['endereco_foto3']}',
   '{$ap['endereco_foto4']}',
   '{$ap['endereco_foto5']}',
   '{$ap['endereco_foto6']}',
   '{$ap['endereco_foto7']}',
   
   '{$ap['endereco_foto8']}',
   '{$ap['endereco_foto9']}',
   '{$ap['endereco_foto10']}',
   '{$ap['endereco_foto11']}',
   
   '{$ap['endereco_foto12']}',
   '{$ap['endereco_foto13']}',
   '{$ap['endereco_foto14']}',
   '{$ap['endereco_foto15']}',
   
   '{$ap['legendaplanta1']}',
   '{$ap['legendaplanta2']}',
   '{$ap['legendaplanta3']}',
   '{$ap['legendaplanta4']}',
      
    '{$ap['titulocurva1']}',
    '{$ap['textocurva1']}',
    
    '{$ap['titulocurva2']}',
    '{$ap['textocurva2']}',
    
    '{$ap['titulocurva3']}',
    '{$ap['textocurva3']}',
    
    '{$ap['titulocurva4']}',
    '{$ap['textocurva4']}',
    
    '{$ap['linkinteresse']}',
   
   '{$ap['memorial']}',
   '{$ap['tabela']}',
   
   'ativo')";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function cadastraPage($page, $conexao){
    
   $query = "update pagina set    
        regulamento = '{$page['regulamento']}', 
        politica = '{$page['politica']}', 
        termos = '{$page['termos']}'
        
        where id = 1";
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function alteraAp($ap, $conexao){
    
   $query = "update imovel set nome_imovel = '{$ap['nome']}', 
                                tipo_imovel = '{$ap['tipo']}', 
                                valor_imovel = '{$ap['valor']}',
                                qtd_quartos = '{$ap['quartos']}',
                                piscina = '{$ap['extras']['piscina']}',
                                academia = '{$ap['extras']['academia']}',
                                salao = '{$ap['extras']['salao']}',
                                status = '{$ap['status']}' 
                                
                                where id_imovel='{$ap['id']}'";
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function editaAp($ap, $conexao){
        
   $query = "update imovel set 
                                nome_imovel = '{$ap['nome']}', 
                                bairro_imovel = '{$ap['bairro']}', 
                                tipo_imovel = '{$ap['tipo']}', 
                                video = '{$ap['video']}', 
                                lat = '{$ap['lat']}', 
                                longt = '{$ap['longt']}', 
                                valor_imovel = '{$ap['valor']}',
                                qtd_quartos = '{$ap['quartos']}',
                                piscina = '{$ap['extras']['piscina']}',
                                academia = '{$ap['extras']['academia']}',
                                salao = '{$ap['extras']['salao']}',
                                col1 = '{$ap['col1']}',
                                col2 = '{$ap['col2']}',
                                
                                desconto_imovel = '{$ap['desconto_imovel']}',
   
                                legendaplanta1 = '{$ap['legendaplanta1']}',
                                legendaplanta2 = '{$ap['legendaplanta2']}',
                                legendaplanta3 = '{$ap['legendaplanta3']}',
                                legendaplanta4 = '{$ap['legendaplanta4']}',

                                video = '{$ap['video']}',

                                memorial = '{$ap['memorial']}',
                                tabela = '{$ap['tabela']}',
                                linkinteresse = '{$ap['linkinteresse']}',
                                
                                titulocurva1 = '{$ap['titulocurva1']}',
                                textocurva1 = '{$ap['textocurva1']}',
                                titulocurva2 = '{$ap['titulocurva2']}',
                                textocurva2 = '{$ap['textocurva2']}',
                                titulocurva3 = '{$ap['titulocurva3']}',
                                textocurva3 = '{$ap['textocurva3']}',
                                titulocurva4 = '{$ap['titulocurva4']}',
                                textocurva4 = '{$ap['textocurva4']}',
                                
                                status = '{$ap['status']}' 
                                
                                where id_imovel='{$ap['id']}'";    
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 


function editaImagens($id, $ap, $conexao){
        
   $query = "update imovel set 
                                endereco_foto_capa = '{$ap['endereco_foto0']}',
                                
                                endereco_foto1 = '{$ap['endereco_foto1']}',
                                endereco_foto2 = '{$ap['endereco_foto2']}',
                                endereco_foto3 = '{$ap['endereco_foto3']}',
                                endereco_foto4 = '{$ap['endereco_foto4']}',
                                endereco_foto5 = '{$ap['endereco_foto5']}',
                                endereco_foto6 = '{$ap['endereco_foto6']}',
                                endereco_foto7 = '{$ap['endereco_foto7']}',
                                endereco_foto8 = '{$ap['endereco_foto8']}',
                                endereco_foto9 = '{$ap['endereco_foto9']}',
                                endereco_foto10 = '{$ap['endereco_foto10']}',
                                
                                endereco_logo = '{$ap['endereco_foto11']}',
                                
                                planta1 = '{$ap['endereco_foto12']}',
                                planta2 = '{$ap['endereco_foto13']}',
                                planta3 = '{$ap['endereco_foto14']}',
                                planta4 = '{$ap['endereco_foto15']}'
                                
                                where id_imovel='{$id}'";    
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function mudaImagem($id, $nome, $campo, $conexao){
    
    
    
   echo $query = "update imovel set 
                                {$campo} = '{$nome}'
                                where id_imovel='{$id}'";    
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function excluiImagem($id, $campo, $conexao){
    
    
    
   echo $query = "update imovel set 
                                {$campo} = 'vazio'
                                where id_imovel='{$id}'";    
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function alteraEndereco($ap, $conexao){
    
   $query = "update imovel set nome_imovel = '{$ap['nome']}', 
                                tipo_imovel = '{$ap['tipo']}', 
                                valor_imovel = '{$ap['valor']}',
                                qtd_quartos = '{$ap['quartos']}',
                                piscina = '{$ap['extras']['piscina']}',
                                academia = '{$ap['extras']['academia']}',
                                salao = '{$ap['extras']['salao']}',
                                status = '{$ap['status']}' 
                                
                                where id_imovel='{$ap['id']}'";
    
    $resultado = mysqli_query($conexao, $query);
    return mysqli_insert_id($conexao);
    } 

function cadastraEndereco($endereco, $conexao){
    
   $query = "insert into endereco_imoveis (id_imovel, cidade, bairro, numero, rua) values ('{$endereco['idImovel']}','{$endereco['cidade']}', '{$endereco['bairro']}', '{$endereco['numero']}', '{$endereco['rua']}') ";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
    } 

function listaTodosImoveis($conexao){
    $array_imoveis = array();
    $resultado = mysqli_query($conexao, "select * from imovel");

    while($imovel = mysqli_fetch_assoc($resultado)){
        array_push($array_imoveis, $imovel);
    }
    return $array_imoveis;
}

function listaImoveis($conexao){
    $array_imoveis = array();
    $resultado = mysqli_query($conexao, "select * from imovel where status = 'ativo' ");

    while($imovel = mysqli_fetch_assoc($resultado)){
        array_push($array_imoveis, $imovel);
    }
    return $array_imoveis;
}

function buscaImoveis($imovel, $conexao){
    $array_imoveis = array();
    $resultado = mysqli_query($conexao, "select * from imovel where
                                    valor_imovel <= '{$imovel['valmax']}' and
                                    bairro_imovel = '{$imovel['bairro']}' and
                                    qtd_quartos   >= '{$imovel['qto']}' and
                                    
                                    status        = 'ativo'");

    while($imovel = mysqli_fetch_assoc($resultado)){
        array_push($array_imoveis, $imovel);
    }
    return $array_imoveis;
}




/*(piscina       = '{$imovel['piscina']}' or
                                    salao         = '{$imovel['salao']}' or
                                    academia      = '{$imovel['academia'] }') and*/




function listaBairros($conexao){
    $array_bairro = array();
    $resultado = mysqli_query($conexao, "select distinct(bairro_imovel) from imovel");

    while($bairro = mysqli_fetch_assoc($resultado)){
        array_push($array_bairro, $bairro);
    }
    return $array_bairro;
}


function listaInfo($conexao){
    $array_info = array();
    $resultado = mysqli_query($conexao, "select * from pagina");

    while($info = mysqli_fetch_assoc($resultado)){
        array_push($array_info, $info);
    }
    return $array_info;
}

function exibeImovel($id, $conexao){
    $array_imoveis = array();
    $resultado = mysqli_query($conexao, "select * from imovel where id_imovel = '{$id}' ");

    while($imovel = mysqli_fetch_assoc($resultado)){
        array_push($array_imoveis, $imovel);
    }
    return $array_imoveis;
}

function exibeEndereco($id, $conexao){
    $array_enderecos = array();
    $resultado = mysqli_query($conexao, "select * from endereco_imoveis where id_imovel = '{$id}' ");

    while($endereco = mysqli_fetch_assoc($resultado)){
        array_push($array_enderecos, $endereco);
    }
    return $array_enderecos;
}

function mudaDisp($status, $id, $conexao){
    $query = "update imovel set status = '{$status}' where id_imovel='{$id}'";
    return $resultado = mysqli_query($conexao, $query);
}

function excluiAp($id, $conexao){
    $query = "delete from imovel where id_imovel='{$id}'";
    return $resultado = mysqli_query($conexao, $query);
}