<?php
session_start();

include 'header.php';
?>    
   
<div class="container-fluid sempadding">
    <div id="linha" class=""></div>

    
    <div id="corpo" class="col-xs-12 col-sm-12 col-md-12">
        

    <div id="cima" class="col-md-12 ">
            <img class="tamanhologo center-block" src="img/logo.png" style="width: 10%">
    </div>
    
<form enctype="multipart/form-data" action="logica/loga.php" method="post" class="form-horizontal afasta" role="form">



<!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuário</label>  
  <div class="col-md-6">
  <input id="textinput" name="usuario" type="text" placeholder="Usuário" class="form-control input-md">
    
  </div>
</div>

      <!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">senha</label>  
  <div class="col-md-6">
  <input id="textinput" name="senha" type="password" placeholder="senha" class="form-control input-md">
    
  </div>
</div>      
        
        <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-default btn-block">Entrar</button>
  </div>
</div>



</form>


    

</div>
</div>
    
<?php include 'footer.php'; ?>