<?php 
session_start();
if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] == 'admin'){
?>

<?php
include 'logica/dao/conexao.php';
include 'logica/dao/operacoesDAO.php';
include 'header.php';

?>
<div class="container-fluid sempadding">
    <div id="linha" class=""></div>


<div id="corpo" class="col-md-12">
        
<?php include 'menu.php' ;?>
    <div id="cima" class="col-md-12 ">
            
        <div class="col-md-12 list-group">
        <?php
            $array_imoveis = listaTodosImoveis($conexao);
            foreach($array_imoveis as $imovel) { ?>
            
                <a href="edicaoImovel.php?id=<?=$imovel['id_imovel']?>" class="list-group-item lista">
                    <b>ID:</b> <?=$imovel['id_imovel']?> 
                    <hr class="vr">
                    <img src="logica/uploads/<?=$imovel['endereco_logo']?>" style="
    max-width: 90px;">
                    <hr class="vr">
                    <b>Nome do imovel:</b> <?=$imovel['nome_imovel']?>
                    <hr class="vr">
                    <b>Valor do imovel:</b> <?=$imovel['valor_imovel']?>
                  
                    <hr class="vr">
                    <b>Status:</b> <?=$imovel['status']?>
                    <hr class="vr">
                    
                </a>
            
            <?php ; } ?>
        

        </div>

        
        
        </div>

    

</div>
</div>

<?php include 'footer.php';
    
    
      
}else{
    header("location: login.php");
}
