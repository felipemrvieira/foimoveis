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

            
<h2>Editar Imóvel</h2>
            <div class="col-md-12">
                  <a href="edicaoImagens.php?id=<?=$imovel['id_imovel']?>">
                    Editar imagens
                  </a>
            </div>
  <form action="logica/editaImovel.php?id=<?=$imovel['id_imovel']?>" method="post" class="form-horizontal" role="form">


      
<!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome do Imóvel</label>  
  <div class="col-md-6">
  <input id="textinput" name="nome" type="text" value="<?=$imovel['nome_imovel']?>" class="form-control input-md">
    
  </div>
</div>
      
<!-- nome Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Bairro do Imóvel</label>  
  <div class="col-md-6">
  <input id="textinput" name="bairro" type="text" value="<?=$imovel['bairro_imovel']?>" class="form-control input-md">
    
  </div>
</div>

<!-- valor Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Valor</label>  
  <div class="col-md-6">
  <input type="number" min="0.01" step="0.01" name="valor" class="form-control" value="<?=$imovel['valor_imovel']?>">
    
  </div>
</div>
      
<!-- desconto Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Desconto</label>  
  <div class="col-md-6">
  <input type="text" name="desconto_imovel" class="form-control" value="<?=$imovel['desconto_imovel']?>">
    
  </div>
</div>
      
<!-- quartos Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Quartos</label>  
  <div class="col-md-6">
  <input type="number" min="0" step="1" name="quartos" class="form-control" value="<?=$imovel['qtd_quartos']?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tipo</label>  
  <div class="col-md-6">
  <select class="form-control" id="sel1" name="tipo">
            <option><?=$imovel['tipo_imovel']?></option><option>Residencial</option>
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
          <input type="checkbox" name="piscina" value="piscina"<?php if($imovel['piscina'] == 's') echo 'checked'?>>Piscina
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="salao" value="salao" <?php if($imovel['salao'] == 's') echo 'checked'?> >Salão de Festas
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="academia" value="academia" <?php if($imovel['academia'] == 's') echo 'checked'?> >Academia
        </label>
  </div>
</div>
      
      
     
      
      
      <div class="col-md-12">
        <br>
        <div class="alert alert-warning">
            <strong>Atenção!</strong> Cada ítem da lista de atributos deve finalizar com <strong>;</strong><br> Ex.: Academia; Piscina;
        </div>
        
    </div>
<!-- lista Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Lista de Atributos</label>  
   
<div class="col-md-3">
  <textarea class="form-control" name="col1" rows="5" id="comment"><?=$imovel['col1']?></textarea>
</div>
<div class="col-md-3">
 <textarea class="form-control" name="col2" rows="5" id="comment" ><?=$imovel['col2']?></textarea>
</div>

    
</div>      
      
      
      <hr>
<!-- coordenadas Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Coordernadas</label>  
  <div class="col-md-3">
  <input value="<?=$imovel['lat']?>" id="textinput" name="lat" type="text" class="form-control input-md">
  </div>
    
    <div class="col-md-3">
      <input value="<?=$imovel['longt']?>" id="textinput" name="longt" type="text" class="form-control input-md">
    </div>
    
</div>
      
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto da Página inicial</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto_capa']?>">
  </div>
</div>
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 1 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto1']?>">
  </div>
</div>
      <!-- fotos --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 2 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto2']?>">
  </div>
</div><!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 3 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto3']?>">
  </div>
</div>
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 4 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto4']?>">
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 5 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto5']?>">
  </div>
</div>
      
            <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 6 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto6']?>">
  </div>
</div>
    
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 7 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto7']?>">
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 8 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto8']?>">
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 9 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto9']?>">
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Foto 10 do Imóvel</label>
  <div class="col-md-4">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto10']?>">
  </div>
</div>
      <hr>
      

      
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Logo do Imóvel</label>
  <div class="col-md-6">
    <img class=" metade" src="logica/uploads/<?=$imovel['endereco_logo']?>">
  </div>
</div>
      
<!-- Link  tenho interesse Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Link Tenho Interesse!</label>  
  <div class="col-md-6">
  <input id="textinput" name="linkinteresse" type="text" value="<?=$imovel['linkinteresse']?>" class="form-control input-md">
    
  </div>
</div>
      
<hr>

    <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 1</label>  
  <div class="col-md-6">
    <input id="titulocurva1" name="titulocurva1" type="text" value="<?=$imovel['titulocurva1']?>" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 1</label>  
  <div class="col-md-6">
    <input id="textocurva1" name="textocurva1" type="text" value="<?=$imovel['textocurva1']?>" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 2</label>  
  <div class="col-md-6">
    <input id="titulocurva2" name="titulocurva2" type="text" value="<?=$imovel['titulocurva2']?>" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 2</label>  
  <div class="col-md-6">
    <input id="textocurva2" name="textocurva2" type="text" value="<?=$imovel['textocurva2']?>" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 3</label>  
  <div class="col-md-6">
    <input id="titulocurva3" name="titulocurva3" type="text" value="<?=$imovel['titulocurva3']?>" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 3</label>  
  <div class="col-md-6">
    <input id="textocurva3" name="textocurva3" type="text" value="<?=$imovel['textocurva3']?>" class="form-control input-md">
    
  </div>
</div>    
      
      <!-- curvas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título Curva 4</label>  
  <div class="col-md-6">
    <input id="titulocurva4" name="titulocurva4" type="text" value="<?=$imovel['titulocurva4']?>" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Texto Curva 4</label>  
  <div class="col-md-6">
    <input id="textocurva4" name="textocurva4" type="text" value="<?=$imovel['textocurva4']?>" class="form-control input-md">
    
  </div>
</div>
      
      
<!-- memorial e tabela excluidos-->

  <input name="memorial" type="hidden" value="vazio">
  <input name="tabela" type="hidden" value="vazio">
      
      <hr>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 1</label>
  <div class="col-md-6">
    <img class=" metade" src="logica/uploads/<?=$imovel['planta1']?>">
  </div>
</div>
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 1</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta1" type="text"  value="<?=$imovel['legendaplanta1']?>" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 2</label>
  <div class="col-md-6">
    <img class=" metade" src="logica/uploads/<?=$imovel['planta2']?>">
  </div>
</div>
      
<!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 2</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta2" type="text" value="<?=$imovel['legendaplanta2']?>" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 3</label>
  <div class="col-md-6">
    <img class=" metade" src="logica/uploads/<?=$imovel['planta3']?>">
  </div>
</div>
      
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 3</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta3" type="text" value="<?=$imovel['legendaplanta3']?>" class="form-control input-md">
    
  </div>
</div>
      
      <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Planta 4</label>
  <div class="col-md-6">
    <img class=" metade" src="logica/uploads/<?=$imovel['planta4']?>">
  </div>
</div>
      
      <!-- legenda planta Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Legenda Planta 4</label>  
  <div class="col-md-6">
  <input id="textinput" name="legendaplanta4" type="text" value="<?=$imovel['legendaplanta4']?>"class="form-control input-md">
    
  </div>
</div>
      <hr>
      
<!-- video Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Vídeo do Imóvel</label>  
  <div class="col-md-6">
  <input value="<?=$imovel['video']?>" id="textinput" name="video" type="text"  class="form-control input-md">
    
  </div>
</div>

<hr>

      <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Status</label>  
  <div class="col-md-6">
  <select class="form-control" id="status" name="status">
            <option value="<?=$imovel['status']?>"><?=$imovel['status']?></option>
            <option value="ativo">ativo</option>
            <option value="inativo">inativo</option>
        </select>
    
  </div>
</div>
      
<hr>
<!-- Button -->
<div class="form-group">
  
    
  <div class="col-md-5">
    <button type="submit" formaction="logica/excluiImovel.php?id=<?=$imovel['id_imovel']?>" class="btn btn-danger btn-block">Excluir imóvel</button>
  </div>
    
  <div class="col-md-2">
      
  </div>
    
  <div class="col-md-5">
    <button type="submit" class="btn btn-default btn-block">Salvar </button>
  </div>
</div>
<?php } ?>


</form>

    
</div>
    </div>
</div>
</div>







<?php include 'footer.php'?>

<?php    
}else{
    header("location: login.php");
}