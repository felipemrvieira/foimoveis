<?php
include 'logica/dao/conexao.php';
include 'logica/dao/operacoesDAO.php';

include '../header.php';
$id = $_GET['id'];

$arrayEnderecos = exibeEndereco($id, $conexao);
foreach($arrayEnderecos as $endereco){ ?>

<div class="container">
  <h2>Editar Endereço</h2>
  <form action="logica/cadastraEndereco.php?id=$id" method="post" class="form-horizontal" role="form">
        
     <div class="form-group">
      <label class="control-label col-sm-2">Cidade:</label>
      <div class="col-sm-10">          
        <input type="text"  name="cidade" class="form-control" value="<?=$endereco['cidade']?>">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2">Bairro:</label>
      <div class="col-sm-10">          
        <input type="text"  name="bairro" class="form-control" value="<?=$endereco['bairro']?>">
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2">Rua:</label>
      <div class="col-sm-10">          
        <input type="text" name="rua" class="form-control" value="<?=$endereco['rua']?>">
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Número:</label>
      <div class="col-sm-10">          
        <input type="number" min="1" step="1" name="numero" class="form-control" value="<?=$endereco['numero']?>">
      </div>
    </div>
<?php } ?>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-block btn-default">Alterar Endereço</button>
      </div>
    </div>
  </form>
</div>

<?php include 'footer.php'?>