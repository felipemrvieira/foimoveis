<?php
include 'logica/dao/conexao.php';
include 'logica/dao/operacoesDAO.php';

include '../header.php';
$id = $_GET['id'];

$arrayImoveis = exibeImovel($id, $conexao);
foreach($arrayImoveis as $imovel){
    ?>

    <div class="col-md-3">
        <img class="img-responsive" src="../img/1.jpg">
    </div>  
<div class="container">
<div class="col-md-9">   

  <h2>Editar Imóvel</h2>
  <form action="logica/alteraInfo.php?id=<?=$imovel['id_imovel']?>" method="post" class="form-horizontal" role="form">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id do imóvel:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="id" value="<?=$imovel['id_imovel']?>" disabled>
      </div>
    </div>    
        
    <div class="form-group">
      <label class="control-label col-sm-2">Disponibilidade:</label>
      <div class="col-sm-8">
      <select class="form-control" id="sel1" name="status" >
            <option <?php if($imovel['status']=='ativo')echo 'selected';?>>ativo</option>
            <option <?php if($imovel['status']=='inativo')echo 'selected';?>>inativo</option>
        </select>
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nome:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="nome" value="<?=$imovel['nome_imovel']?>">
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2">Tipo do Imóvel:</label>
      <div class="col-sm-8">
        <select class="form-control" name="tipo" >
            <option <?php if($imovel['tipo_imovel']=='Residencial')echo 'selected';?>>Residencial</option>
            <option <?php if($imovel['tipo_imovel']=='Comercial')echo 'selected';?>>Comercial</option>
            <option <?php if($imovel['tipo_imovel']=='Casa')echo 'selected';?>>Casa</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Valor do imóvel:</label>
      <div class="col-sm-8">          
        <input type="number" min="0.01" step="0.01" name="valor" class="form-control" placeholder="valor do imovel" value="<?=$imovel['valor_imovel']?>">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Quartos:</label>
      <div class="col-sm-8">          
        <input type="number" min="1" step="1" name="quartos" class="form-control" placeholder="quartos" value="<?=$imovel['qtd_quartos']?>">
      </div>
    </div>
    
    <div class="form-group">
        <label class="checkbox-inline">
          <input type="checkbox" name="piscina" value="piscina" <?php if($imovel['piscina']=='s') echo 'checked'?> >Piscina
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="salao" value="salao" <?php if($imovel['salao']=='s') echo 'checked'?>>Salão de Festas
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="academia" value="academia" <?php if($imovel['academia']=='s') echo 'checked'?>>Academia
        </label>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Salvar alterações</button>
      </div>
    </div>
  </form>
</div>

        
        
    </div>

<?php  
}
?>

<?php
include '../footer.php';