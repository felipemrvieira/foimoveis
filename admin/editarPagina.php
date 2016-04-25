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
                $array_info = listaInfo($conexao);
                foreach($array_info as $info) { ?>
                
                    
                
        
    <h2>Informações da página</h2>
  <form action="logica/editaPagina.php" method="post" class="form-horizontal" role="form">
        
     <!-- lista Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Regulamento</label>  
   
    <div class="col-md-8">
        <textarea class="form-control" name="regulamento" rows="10" id="comment" ><?=$info['regulamento']?></textarea>
    </div>
</div>    
      
      <!-- lista Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Termos de uso</label>  
   
    <div class="col-md-8">
        <textarea class="form-control" name="termos" rows="10" id="comment" ><?=$info['termos']?></textarea>
    </div>
</div>      
      
      <!-- lista Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Política de privacidade</label>  
   
    <div class="col-md-8">
        <textarea class="form-control" name="politica" rows="10" id="comment" ><?=$info['politica']?></textarea>
    </div>
</div>      
    
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-block">Cadastrar Informações!</button>
      </div>
    </div>
  </form>
            <?php } ?>
</div>

    
        </div>
    </div>
</div>
</div>







<?php include 'footer.php'?>



<?php    
}else{
    header("location: login.php");
}