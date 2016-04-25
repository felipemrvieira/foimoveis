<?php



if(isset($_POST['piscina'])){
    $piscina = $_POST['piscina'];
}else{
    $piscina = 'n';
}

if(isset($_POST['salao'])){
    $salao = $_POST['salao'];
}else{
    $salao = 'n';
}

if(isset($_POST['academia'])){
    $academia = $_POST['academia'];
}else{
    $academia = 'n';
}

if(isset($_POST['valmax'])){
    $valmax = $_POST['valmax'];
}else{
    $valmax = 4000000;
}

if(isset($_POST['bairro'])){
    $bairro = $_POST['bairro'];
}else{
    $bairro = 'n';
}

if(isset($_POST['qto'])){
    $qto = $_POST['qto'];
}else{
    $qto = 1;
}





$imovel['valmax'] = $valmax;
$imovel['bairro'] = $bairro;
$imovel['qto'] = $qto;
$imovel['piscina'] = $piscina;
$imovel['salao'] = $salao;
$imovel['academia'] = $academia;



$dir = dirname(__FILE__);
include($dir.'/admin/logica/dao/operacoesDAO.php');
include($dir.'/admin/logica/dao/conexao.php');
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feirão Online de Imóveis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link rel="icon" href="img/fav2.png" />
    
    
    
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3qLR0ijii6Ks2GWxLEbhqt0N22k4RsAW";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
    
    
<script>
 
  $zopim(function() {
    $zopim.livechat.button.setPositionMobile('bl');
  });
 
</script>   
    
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54863615-2', 'auto');
  ga('send', 'pageview');

</script>
    
    
    
    
    
</head>
<body>
    
<div class="corpo">
    
    
<div class="row corpo-interno">
    <div class="col-md-3 nopadoverflow" id="filtro" style="">
    
        
        <a href="index.php"><img class="center-block tamanhomaximo" id="logofiltro" src="img/logo2.png"></a>
        
        <img class="" id="elementofiltro" src="img/elemento.png">
        
    <form action="index.php?busca" method="post">
        <div class="center-block" id="elementofiltro2">
            
           
            <div class="col-xs-2 col-md-2 valor sempadding">
                Valor:
            </div>
            
            <div class="col-md-10 sempadding" style="text-align: right;">
                R$ 100.000 à
            
            
                <output class="sempadding valornumero" for="fader" id="volume">R$ 100.000</output>
            </div>
            <div class="col-md-12 sempadding">
                <input style="
                    background-color: #F6AD06;
                " type="range" min="100000" max="4000000" value="100000" id="fader" name="valmax" step="100" oninput="outputUpdate(value)">

            </div>
        </div>
        
        <div class="col-xs-12 col-md-12 selectimovel">
            
            <div class="col-xs-12 col-md-6 form-group nopad">
                
              <label class="floatl labelselect" for="qto">Quartos:</label>
              <select name="qto" class="selectfiltro form-control floatr" id="qto">
                <option value="0">Sem quarto(Terreno)</option>
                <option value="1">1 Quarto</option>
                <option value="2">2 Quartos</option>
                <option value="3">3 Quartos</option>
                <option value="4">4 Quartos</option>
                <option value="5">5 Quartos</option>
              </select>
                
            </div>
            
            <div class="col-xs-12 col-md-6 form-group nopad">
                
              <label class="floatl labelselect" for="bairro">Bairro:</label>
              <select class="selectfiltro form-control floatr" id="bairro" name="bairro">
                <?php
                $array_bairro = listaBairros($conexao);
                foreach($array_bairro as $bairro) { ?>
                
                    <option><?=$bairro['bairro_imovel']?></option>
                
                <?php } ?>
              </select>
                
            </div>
        
        </div>
        
        
        <div class="col-xs-12 col-md-12 checkimovel ">
            
            <label class="checkbox-inline">
              <input style="margin-top: 2px;" type="checkbox" name="piscina" value="s">
                Piscina
            </label>
            <label class="checkbox-inline">
              <input style="margin-top: 2px;" type="checkbox" name="salao" value="s">
                Salão de festas
            </label>
            <label class="checkbox-inline">
              <input style="margin-top: 2px;" type="checkbox" name="academia" value="s">
                Academia
            </label>
          
        </div>
        
        
        
        <div class="col-xs-12 col-md-12 selectimovel">
        
            <div class="col-md-6 ">
                
            </div>
            
            
            <div class="col-md-6 sempadding">
                <div class="form-group">
                  <button type="submit" class="btnbuscar btn">BUSCAR</button>
                </div>
            </div>
                
            
        </div>
    </form>
            
        
        
        <br><hr>
        
        <div class="col-md-12 calendararea">
            
            <div id="calendario" class="col-md-4 sempadding">
                <img  class="tamanhomaximo" src="img/calendario.png" style="width:100%">
            </div>
            
            <div class="col-md-8 sempadding">
                <img class="tamanhomaximo" src="img/descontosimperdiveis.png">
            </div>
        </div>
        
        <hr>
        
            <div class="col-md-12 sempadding">
                <div class="form-group">
                  <!--<button type="button" class="btncorretor btn">
                      <p class="semmargin">FALE AGORA COM CORRETOR</p>
                      <p class="semmargin">CHAT AO VIVO</p>
                    </button>-->
                </div>
            </div>
        
    </div> <!-- coluna 3 esquerda-->
    

    
    
    <!-- coluna 9 direita-->
    <div id="anuncios" class="col-md-9 nopadoverflow" >
        
        
        
        
         <?php
        if(array_key_exists("busca", $_GET)){
            $array_imoveis = buscaImoveis($imovel, $conexao);
        }else{
            $array_imoveis = listaImoveis($conexao);
        }
            foreach($array_imoveis as $imovel) { ?>
        
        <!-- anuncio individual-->
        <div class="col-md-4 nopadoverflow">
            <div class="grow">
                <a href="detalheimovel.php?id=<?=$imovel['id_imovel']?>">
                    <img class="imganuncio" src="admin/logica/uploads/<?=$imovel['endereco_foto_capa']?>">
                
                    
                
                    <div class="legenda">
                        <div>
                            <img src="img/elementolegenda.png">
                        </div>

                        <div class="txtimovel">
                            <div class="tipo"><?=$imovel['tipo_imovel']?></div>
                            <div class="nome"><?=$imovel['nome_imovel']?></div>
                        </div>
                    </div>

                    <div class="oferta">
                        <div class="dez"><?=$imovel['desconto_imovel']?></div>
                        <div class="de">de desconto</div>
                        <div class="botao center-block">Clique aqui e saiba mais!</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- anuncio individual-->
        <?php }?>
        
        
        
                <!-- anuncio individual-->
<!--        <div class="col-md-4 nopadoverflow">
            <div class="grow">
                <a href="detalheimovel.html">
                    <img class="imganuncio" src="http://1.bp.blogspot.com/_zZSxcEzfHMc/THr5RAlM9ZI/AAAAAAAAAIs/UfNNqXmxMvw/s1600/PREDIO1.jpg" alt="portrait">
                
                    
                
                    <div class="legenda">
                        <div>
                            <img src="img/elementolegenda.png">
                        </div>

                        <div class="txtimovel">
                            <div class="tipo">Residencial</div>
                            <div class="nome">Premiatto</div>
                        </div>
                    </div>

                    <div class="oferta">
                        <div class="dez">10%</div>
                        <div class="de">de desconto</div>
                        <div class="botao center-block">Clique aqui e saiba mais!</div>
                    </div>
                </a>
            </div>
        </div>-->
        <!-- anuncio individual-->
        
        
       

        
      
        
        
        
        <!-- modal -->
<div id="myModalReg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
          <div class="row">
              <div class="col-md-12">
              <img class="casamodal" src="img/casamodal.png">
              </div>
          </div>
          
          </div>
        <div class="row">
            <div class="col-md-12 txtmodal">
                <h3>Regulamento</h3>
                <?php
                $array_info = listaInfo($conexao);
                foreach($array_info as $info) { ?>
                
                    <p><?=$info['regulamento']?></p>
                
                <?php } ?>

            </div>
        </div>
          
          
          
         <div class="row">
            <div class="col-md-12 botoesmodal">
                <!--<img src="img/print.png">
                <img src="img/download.png">-->
            </div>
        </div>
        
      </div>
    </div>
  </div> <!-- modal -->
        
        
        
                <!-- modal -->
<div id="myModalTer" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
          <div class="row">
              <div class="col-md-12">
              <img class="casamodal" src="img/casamodal.png">
              </div>
          </div>
          
          </div>
        <div class="row">
            <div class="col-md-12 txtmodal">
                <h3>Termos de Uso</h3>
                <?php
                $array_info = listaInfo($conexao);
                foreach($array_info as $info) { ?>
                
                    <p><?=$info['termos']?></p>
                
                <?php } ?>

            </div>
        </div>
          
          
          
        <div class="row">
            <div class="col-md-12 botoesmodal">
                <!--<img src="img/print.png">
                <img src="img/download.png">-->
            </div>
        </div>
        
      </div>
    </div>
  </div> <!-- modal -->
        
        
                <!-- modal -->
<div id="myModalPol" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
          <div class="row">
              <div class="col-md-12">
              <img class="casamodal" src="img/casamodal.png">
              </div>
          </div>
          
          </div>
        <div class="row">
            <div class="col-md-12 txtmodal">
                <h3>Política de Privacidade</h3>
                <?php
                $array_info = listaInfo($conexao);
                foreach($array_info as $info) { ?>
                
                    <p><?=$info['politica']?></p>
                
                <?php } ?>

            </div>
        </div>
          
          
        <div class="row">
            <div class="col-md-12 botoesmodal">
                <!--<img src="img/print.png">
                <img src="img/download.png">-->
            </div>
        </div>
        
      </div>
    </div>
  </div> <!-- modal -->
        
        
        
        
        
        
</div><!-- coluna 9 direita -->
        
        
        
</div><!-- row do corpo -->
        
        
  <!-- Large modal -->
    

</div><!-- corpo -->
    
<div class="row"><!--row do rodape-->
  <div id="rodape" class="row col-md-12 nopad"><!--rodape-->
          <div class="col-md-4 centraliza">
            REALIZAÇÃO 
              <img width="25%" src="img/aljos2.png">
              <img width="30%" src="img/teto2.png">
          </div>
    
            <div class="col-md-8 col-xs-12 regulamento centraliza">
                 
            
                  <img src="img/casa.png">
                
                  <a href="#myModalReg" role="button" class="btnrodape" data-toggle="modal">REGULAMENTO</a>

                  &#x25cf;
 
                  <a href="#myModalTer" role="button" class="btnrodape" data-toggle="modal">TERMOS E CONDIÇÕES</a>  
                
                  &#x25cf;
                
                    <a href="#myModalPol" role="button" class="btnrodape" data-toggle="modal">POLÍTICA DE PRIVACIDADE</a>
            </div>
      
      
    </div><!--rodape-->
</div><!--row do rodape-->
    <div id="barracinza" class="row col-md-12">
    <br>
    </div>

    
    
    

    <script>
        function outputUpdate(vol) {
	document.querySelector('#volume').value ='R$ '+ vol;
}
    </script>
    
    
</script>
    
 <!-- //script para preencher a area do menu -->
   <!-- <script>
$(document).ready(function(){
    
        var txt = "";
        txt += "Document width/height: " + $(document).width();
        txt += "x" + $(document).height() + "\n";
    
        var tamanho = $(document).height()-($('#rodape').height()+50.50+35);
        if(tamanho < 747){
            tamanho = 747;
        }
    
        //alert(tamanho);
        if (window.outerWidth > 788) {
            $("#filtro").attr({
                "style" : "height:" + tamanho + "px"
            });
        }
        
   
});
</script>-->
    
<!-- //script para remover a div do calendario -->
    <script>
$(document).ready(function(){
    

        if (window.outerWidth < 788) {
            $( "#calendario" ).remove();
        }
        
   
});
</script>  
    
    </body>
    
</html>