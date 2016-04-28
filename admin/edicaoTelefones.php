<?php 
session_start();
if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] == 'admin'){
?>

<?php 
include 'logica/dao/conexao.php';
include 'logica/dao/operacoesDAO.php';
include 'header.php'?>

<div class="container-fluid sempadding">
    <div id="linha" class=""></div>

    
    <div id="corpo" class="col-xs-12 col-md-12">
        
    <?php include 'menu.php' ;?>
    
    <div id="" class="col-md-12 ">
        <div class="panel panel-default painel">
            
 
            <?php
            $array_imoveis = exibeImovel($_GET['id'] ,$conexao);
            foreach($array_imoveis as $imovel) { ?>
            
            

            
<h2>Editar Telefones do Imóvel <?=$imovel['nome_imovel']?></h2>
  
   
      
<?php
            $array_telefones = exibeTelefones($conexao, $_GET['id']);
            foreach($array_telefones as $telefone) { ?>
            
            
            
            <div class="alert alert-warning">
            <strong>Atenção!</strong> Para excluir o telefone, preencha com o valor: xxx
        </div>

<form action="logica/mudaTelefone.php?id=<?= $_GET['id']?>&campo=tel1" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Telefone 1</label>
        <div class="col-md-6">
            
            <input id="textinput" name="tel" type="text" placeholder="<?php echo $telefone['tel1']; ?>" required class="form-control input-md">
            
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
<form action="logica/mudaTelefone.php?id=<?= $_GET['id']?>&campo=tel2" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Telefone 2</label>
        <div class="col-md-6">
            
            <input id="textinput" name="tel" type="text" placeholder="<?php echo $telefone['tel2']; ?>" required class="form-control input-md">
            
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            
            
            <?php }?>

            
      <hr>
            

          <!-- Button -->
    <div class="form-group"> 
      <div class="col-md-12">
        <a href="editarImovel.php">
            <button type="button" class="btn btn-default btn-block">Voltar </button>
        </a>
      </div>  
    </div>
    <br><br><br><br>
      
      
<?php } ?>
    
        </div>
    </div>
</div>
</div>







<?php include 'footer.php'?>

<?php    
}else{
    header("location: login.php");
}