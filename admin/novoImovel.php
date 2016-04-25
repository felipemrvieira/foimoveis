<?php 
session_start();
if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] == 'admin'){
?>

<?php include 'header.php'?>

<div class="container-fluid sempadding">
    <div id="linha" class=""></div>

        
    
<div id="corpo" class="col-xs-12 col-sm-12 col-md-12">
        <?php include 'menu.php' ;?>

    
    <div id="" class="col-xs-12 col-sm-12 col-md-12 ">
        <div class="panel panel-default painel">
            
        
<h2>Novo Imóvel</h2>
  <form enctype="multipart/form-data" action="logica/cadastraImovel.php" method="post" class="form-horizontal" role="form">



<!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome do Imóvel</label>  
  <div class="col-md-6">
  <input id="textinput" name="nome" type="text" placeholder="Nome" class="form-control input-md">
    
  </div>
</div>

      <!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Bairro do Imóvel</label>  
  <div class="col-md-6">
  <input id="textinput" name="bairro" type="text" placeholder="Bairro" class="form-control input-md">
    
  </div>
</div>

<!-- valor Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Valor</label>  
  <div class="col-md-6">
  <input type="number" min="0.01" step="0.01" name="valor" class="form-control" placeholder="valor do imovel">
    
  </div>
</div>

<!-- desconto Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Desconto</label>  
  <div class="col-md-6">
  <input type="text"  name="desconto_imovel" class="form-control" placeholder="desconto">
    
  </div>
</div>
      
<!-- quartos Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Quartos</label>  
  <div class="col-md-6">
  <input type="number" required min="0" step="1" name="quartos" class="form-control" placeholder="quartos">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tipo</label>  
  <div class="col-md-6">
  <select class="form-control" id="sel1" name="tipo">
            <option>Residencial</option>
            <option>Comercial</option>
            <option>Casa</option>
            <option>Terreno</option>
        </select>
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes"></label>
  <div class="col-md-4">
    <label class="checkbox-inline">
          <input type="checkbox" name="piscina" value="piscina">Piscina
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="salao" value="salao">Salão de Festas
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="academia" value="academia">Academia
        </label>
  </div>
</div>
      
<!-- lista Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Lista de Atributos</label>  
  
<div class="col-md-3">
  <textarea class="form-control" name="col1" rows="5" id="comment" placeholder="Coluna 1"></textarea>
</div>
<div class="col-md-3">
 <textarea class="form-control" name="col2" rows="5" id="comment" placeholder="Coluna 2"></textarea>
</div>
    <div class="col-md-12">
        <br>
        <div class="alert alert-warning">
            <strong>Atenção!</strong> Cada ítem da lista de atributos deve finalizar com <strong>;</strong><br> Ex.: Academia; Piscina;
        </div>
        
    </div>

</div>      
      
      
      <hr>
<!-- coordenadas Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Coordernadas</label>  
  <div class="col-md-3">
  <input id="textinput" name="lat" type="text" placeholder="Latitude" class="form-control input-md">
  </div>
    
    <div class="col-md-3">
      <input id="textinput" name="longt" type="text" placeholder="Longitude" class="form-control input-md">
    </div>
    
</div>
      <hr>
      
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto da Página inicial</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel11" class="input-file" type="file">
  </div>
</div>
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 1 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel1" class="input-file" type="file">
  </div>
</div>
      <!-- fotos --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 2 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel2" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 3 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel3" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 4 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel4" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 5 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel5" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 6 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel6" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 7 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel7" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 8 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel8" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 9 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel9" class="input-file" type="file">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 10 do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel10" class="input-file" type="file">
  </div>
</div>
      <hr>
      

      
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Logo do Imóvel</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="logo" class="input-file" type="file">
  </div>
</div>
      
<!-- Link  tenho interesse Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Link Tenho Interesse!</label>  
  <div class="col-md-6">
  <input id="textinput" name="linkinteresse" type="text" placeholder="Link do botão 'Tenho Interesse' " class="form-control input-md">
    
  </div>
</div>
      <hr>

    <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 1</label>  
  <div class="col-md-6">
    <input id="titulocurva1" name="titulocurva1" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 1</label>  
  <div class="col-md-6">
    <input id="textocurva1" name="textocurva1" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 2</label>  
  <div class="col-md-6">
    <input id="titulocurva2" name="titulocurva2" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 2</label>  
  <div class="col-md-6">
    <input id="textocurva2" name="textocurva2" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 3</label>  
  <div class="col-md-6">
    <input id="titulocurva3" name="titulocurva3" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 3</label>  
  <div class="col-md-6">
    <input id="textocurva3" name="textocurva3" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 4</label>  
  <div class="col-md-6">
    <input id="titulocurva4" name="titulocurva4" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 4</label>  
  <div class="col-md-6">
    <input id="textocurva4" name="textocurva4" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
      
      <hr>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 1</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel12" class="input-file" type="file">
  </div>
</div>
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 1</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta1" type="text" placeholder="Aparece abaixo da planta" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 2</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel13" class="input-file" type="file">
  </div>
</div>
      
<!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 2</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta2" type="text" placeholder="Aparece abaixo da planta" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 3</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel14" class="input-file" type="file">
  </div>
</div>
      
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 3</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta3" type="text" placeholder="Aparece abaixo da planta" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 4</label>
  <div class="col-md-6">
    <input id="fotosimovel" name="foto_imovel15" class="input-file" type="file">
  </div>
</div>
      
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 4</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta4" type="text" placeholder="Aparece abaixo da planta" class="form-control input-md">
    
  </div>
</div>
      <hr>
      
    
      
      
<!-- video Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput" data-toggle="tooltip" data-placement="right" title="Compartilhar >> Incorporar >> Atributo src">Vídeo do Imóvel</label>  
  <div class="col-md-6">
  <input id="textinput" name="video" type="text" placeholder="ex.: https://www.youtube.com/embed/ffWteeCMSoU" class="form-control input-md">
    
  </div>
</div>


      <!-- memorial e tabela excluidos-->

  <input name="memorial" type="hidden" value="vazio">
  <input name="tabela" type="hidden" value="vazio">
    
<hr>
      
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-default btn-block">Cadastrar</button>
  </div>
</div>



</form>

    
</div>
    </div>
</div>
</div>

   
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>




<?php include 'footer.php'?>

<?php    
}else{
    header("location: login.php");
}



