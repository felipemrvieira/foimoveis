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

            
<h2>Editar Imagens do Imóvel <?=$imovel['nome_imovel']?></h2>
  
   
      


<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto_capa" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto da Página inicial</label>
        <div class="col-md-6">
            <img class=" metade" src="logica/uploads/<?=$imovel['endereco_foto_capa']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto_capa" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            
            <br>            
            
            
      <hr>
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto1" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 1 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto1']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto1" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto2" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 2 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto2']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto2" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto3" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 3 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto3']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto3" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto4" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 4 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto4']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto4" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto5" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 5 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto5']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto5" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto6" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 6 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto6']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto6" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto7" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 7 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto7']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto7" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto8" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 8 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto8']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto8" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto9" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 9 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto9']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto9" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto10" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Foto 10 do Imóvel</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['endereco_foto10']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_foto10" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br> 
            
            
            <hr>
      

<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_logo" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Logo do Imóvel</label>
        <div class="col-md-6">
            <img class=" " src="logica/uploads/<?=$imovel['endereco_logo']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=endereco_logo" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <br>
            
      
<hr>

      
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta1" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Planta 1</label>
        <div class="col-md-6">
            <img class="metade" src="logica/uploads/<?=$imovel['planta1']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta1" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
      
      
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta2" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Planta 2</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['planta2']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta2" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
      
      
      
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta3" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Planta 3</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['planta3']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta3" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
      
      
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta4" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Planta 4</label>
        <div class="col-md-6">
            <img class="metade " src="logica/uploads/<?=$imovel['planta4']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=planta4" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
  
     

      
<hr>

      
      
      
      
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva1" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Imagem da curva 1</label>
        <div class="col-md-6">
            <img class=" " src="logica/uploads/<?=$imovel['img_curva1']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva1" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
<br>
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva2" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Imagem da curva 2</label>
        <div class="col-md-6">
            <img class=" " src="logica/uploads/<?=$imovel['img_curva2']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva2" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
       <br>     
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva3" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Imagem da curva 3</label>
        <div class="col-md-6">
            <img class=" " src="logica/uploads/<?=$imovel['img_curva3']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva3" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
<br>
<form enctype="multipart/form-data" action="logica/mudaImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva4" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Imagem da curva 4</label>
        <div class="col-md-6">
            <img class=" " src="logica/uploads/<?=$imovel['img_curva4']?>">
            <input id="fotosimovel" name="img" class="input-file" type="file" required><br>
            
            <input name="nome" class="input-file" type="hidden" value="<?=$imovel['nome_imovel']?>">
            
            <button type="submit" class="btn btn-default ">Alterar </button>
        </div>
    </div>
</form>
            
            <form action="logica/excluiImagem.php?id=<?=$imovel['id_imovel']?>&campo=img_curva4" method="post" class="form-horizontal" role="form">
                <button type="submit" class="btn btn-danger ">Excluir imagem </button>
            </form>
            
            <hr class="separadorimg">
            <br>
      
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