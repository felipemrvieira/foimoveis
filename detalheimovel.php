<?php
    include 'admin/logica/dao/operacoesDAO.php';
    include 'admin/logica/dao/conexao.php';
    
    $id = 1;
    if(array_key_exists("id", $_GET)){
        $id = $_GET['id'];  
    } 

    $array_imoveis = exibeImovel($id, $conexao);
    foreach($array_imoveis as $imovel) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>Feirão Online de Imóveis</title>
  <meta charset="utf-8">
    <meta name="theme-color" content="#2B669A">
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
    
    
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(<?=$imovel['lat']?>,<?=$imovel['longt']?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
animation:google.maps.Animation.BOUNCE,
  icon:'img/mapicon.png'

  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
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
    
    <div class="col-md-3 nopadoverflow" id="filtro">
    
        
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
    <div class="col-sm-9 col-md-9 sempadding" >
        
        <div class="row">
                
                
                
                <div id="myCarousel" class="col-xs-12 col-md-12 carousel slide sempadding" data-ride="carousel">
  
    
     
<!-- Indicators -->
    <!--
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>-->

  <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                
                <div class="item active">
                  <img class="tamanhocarrousel" src="admin/logica/uploads/<?=$imovel['endereco_foto1']?>">
                </div>

                <?php
                    for($i=2; $i<=10; $i++){ 
                        if($imovel['endereco_foto'.$i] == 'vazio'){?>
                  
                        <?php }else{ ?>
                  
                        <div class="item">
                          <img class="tamanhocarrousel" src="admin/logica/uploads/<?=$imovel['endereco_foto'.$i]?>" alt="Chania">
                        </div>
                  
                    <?php }} ?>
                

               
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon setascarrousel" aria-hidden="true">
                    <img class="img-responsive" src="img/left.png">
                </span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon setascarrousel" aria-hidden="true">  
                    <img class="img-responsive" src="img/right.png"> 
                </span>
                <span class="sr-only">Next</span>
              </a>
                    
                    <!-- Left and right controls -->
                      <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>-->
                    
                    
            </div> 
                
    </div><!--row do carrousel-->

        
        <div class="row" id="fund">
                <div class="bordafotos">
                    <p id ="" class="sempadding semmargin legendaelemento">FOTOS DO EMPREENDIMENTO</p>
                    
                </div>
                
        </div>
            <hr class="linhainterna" id="linhaFotos">
        
        <div id="pad75" class="row">
                <br><br>
                
                <div class="col-md-6 nopad">
                    <div class="col-md-12 nopad">
                        <img class=" img-responsive center-block" src="admin/logica/uploads/<?=$imovel['endereco_logo']?>">
                        <hr class="linhainterna">
                    </div>
                    
                    <div class="col-md-12" style=" <?php if($imovel['lat'] == null) echo'display: none;'; ?> ">
                        <a class="" href="#googleMap">
                            <img class="img-responsive" src="img/vermapa.png">
                        </a>
                        
                    </div>
                </div>
                
                <div class="col-xs-12 col-md-6 sempadding">
                    <div class="col-xs-12 col-md-2 area-desc-bot"></div>
                    
                    <div class="col-xs-12 col-md-10 area-desc-bot">
                       
                        <div class="col-md-12 bordadesconto">
                            <p id="trinta"><?=$imovel['desconto_imovel']?></p>
                            <p id="desconto">de desconto</p>
                            
                        </div>
                        
                        <div class="col-md-12 nopad areabotao">
                            <a href="<?=$imovel['linkinteresse']?>">
                                <img class="tamanhomaximo botao-interesse center-block" src="img/botao.png">
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
            
            </div>
                
                
            

            <div class="row"><!--row da curva-->
                
                <div class="col-md-12 sempadding">
                    
                    
                    
                    
                    
                    
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 center-block nopad branco-cima">
    </div>
    <div class=" col-xm-12 col-sm-12 col-md-12 col-lg-12 center-block nopad geral" style=" <?php if($imovel['titulocurva1'] == null && $imovel['textocurva1'] == null) echo'display: none;'; ?> ">
        
        <div id="curva-esq" class=" curvasazuis" >
        </div>
        
        <div class=" branca-externa">
            <div class=" curvasbrancas" >
                <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12  texto-area-branco" >
                    <strong class="titulo-txt-curvas">
                        <?=$imovel['titulocurva1']?>
                    </strong>
                    <p>
                            <?=$imovel['textocurva1']?> 
                    </p>
                </div>
                
                <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 cinculo-azul center-block sem-margin-top-top28" >
                    <div class="conteudo-bola">
                        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 nopad">
                            <h4 class="titulo-txt-curvas"><?=$imovel['titulocurva1']?></h4>
                        </div>
                        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="center-block" src="admin/logica/uploads/<?=$imovel['img_curva1']?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <div class=" curvasazuis" >
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 cinculo-branco center-block" >
                <div class="col-md-12 nopad">
                    <h4 class="titulo-txt-curvas"><?=$imovel['titulocurva2']?></h4>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                    <img class="center-block" src="admin/logica/uploads/<?=$imovel['img_curva2']?>">
                </div>
            </div>
            
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12  center-block texto-area-azul" >
                <strong class="titulo-txt-curvas">
                    <?=$imovel['titulocurva2']?>
                </strong>
                    <p>
                            <?=$imovel['textocurva2']?> 
                    </p>
            </div>
        </div>

    
        <div class=" branca-externa">
            <div class=" curvasbrancas" >
                <div class="col-md-12  center-block texto-area-branco" >
                
                    <strong class="titulo-txt-curvas">
                        <?=$imovel['titulocurva3']?>
                    </strong>
                    <p>
                            <?=$imovel['textocurva3']?> 
                    </p>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 cinculo-azul center-block sem-margin-top-top28" >
                    <div class="conteudo-bola">
                        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 nopad">
                            <h4 class="titulo-txt-curvas"><?=$imovel['titulocurva3']?></h4>
                        </div>
                        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="center-block" src="admin/logica/uploads/<?=$imovel['img_curva3']?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class=" curvasazuis" >
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 cinculo-branco center-block" >
                <div class="col-md-12 nopad">
                    <h4 class="titulo-txt-curvas"><?=$imovel['titulocurva4']?></h4>
                </div>
                <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                    <img class="center-block" src="admin/logica/uploads/<?=$imovel['img_curva4']?>">
                </div>
            </div>
            
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12  center-block texto-area-azul" >
                <strong class="titulo-txt-curvas">
                    <?=$imovel['titulocurva4']?>
                </strong>
                    <p>
                            <?=$imovel['textocurva4']?>
                    </p>
            </div>
        </div>


        <div class=" branca-externa seis">
            <div id="curva-dir" class=" curvasbrancas" >
            </div>
        </div>
        
    </div>
    <div class=" col-xm-12 col-sm-12 col-md-12 col-lg-12 center-block nopad azul-baixo" style="
    z-index: -1;
">
    </div>
                    
                    
                    
                    
                    
                    
                </div>
          
            </div><!--row da curva-->
 
            <div class="row fundoazul ">
                <div class="col-md-12 bordaserra">
                
                    <div class="col-md-6 sempadding">
                        <ul>
                            <?php
                                if($imovel['bairro_imovel'] <> null){
                                    echo '<li>';
                                    echo 'Bairro: '. $imovel['bairro_imovel'];
                                    echo '</li> ';
                                }?>
                            
                             
                            <?php
                                if($imovel['qtd_quartos'] >0){
                                    echo '<li>';
                                    echo $imovel['qtd_quartos'];

                                    if($imovel['qtd_quartos']>1){
                                        echo ' Quartos';
                                    }else{ 
                                        echo' Quarto';
                                    }

                                    echo '</li>';
                                }
                            ?>
                            
                            
                            
                            <?php
                                $lista = $imovel['col1'];
                                $qtd = substr_count($lista, ';');        
                                
                                for ($i = 1; $i <= $qtd; $i++) {
                                    echo '<li>';
                                    echo $li = substr($lista, '0', strpos($lista, ';'));
                                    echo '</li>';
                                    $lista = str_replace($li.";", "", $lista);
                                }   
                            ?>
                            
                        </ul>


                    </div>
                    <div class="col-md-6 sempadding">
                        <ul>
                            
                            
                                <?php
                                    if($imovel['piscina']=='s') echo '<li>Piscina</li>';
                                ?>
                            
                            
                            
                                <?php
                                    if($imovel['salao']=='s') echo '<li>Salão de festas</li>';
                                ?>
                            
                            
                                <?php
                                    if($imovel['academia']=='s') echo '<li>Academia</li>';
                                ?>
                            
                            
                            <?php
                                $lista = $imovel['col2'];
                                $qtd = substr_count($lista, ';');        
                                
                                for ($i = 1; $i <= $qtd; $i++) {
                                    echo '<li>';
                                    echo $li = substr($lista, '0', strpos($lista, ';'));
                                    echo '</li>';
                                    $lista = str_replace($li.";", "", $lista);
                                }   
                            ?>
                            
                        </ul>
                    </div>
                    
                    <!-- Botões memorial tabela -->
                <!--    <div class="row">
                        
                        
                        <div class="col-md-4 sempadding">
                        
                        <div class="col-xs-12 col-md-12 ">
                            <a href=>
                                <button type="button" class="btn btn-default">Memorial Descritivo</button>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-12 ">
                            <a href=>
                                <button type="button" class="btn btn-default">Tabela de Preços</button>
                            </a>
                        </div>
                        
                    </div>
                        
                    </div>-->
                </div>

                
                
            </div><!--row fundo azul-->
            
        <div id="plantasarea" style=" <?php if($imovel['planta1'] == 'vazio' && $imovel['planta2'] == 'vazio' && $imovel['planta3'] == 'vazio' && $imovel['planta4'] == 'vazio' ) echo'display: none;'; ?> ">
            
            <div class="row">
                <div class="borda">
                    <hr class="hrazul sempadding">
                    <p id ="plantas" class="sempadding legendaelemento">PLANTAS</p>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    
                    
                    
                    <?php
                        for($i=1; $i<=4; $i++){ 
                            if($imovel['planta'.$i] != 'vazio'){ ?>
                                <div class="col-md-3 pop">
                                    <img class="tamanhomaximo " src="admin/logica/uploads/<?=$imovel['planta'.$i]?>">
                                    <p id="legendaplanta"><?=$imovel['legendaplanta'.$i]?></p>
                                </div> 
                            <?php } ?>
                            
                    <?php } ?>
                    
                    
                    <script>
                        $(function() {
                            $('.pop').on('click', function() {
                                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                                $('#imagemodal').modal('show');   
                            });		
                        });
                    </script>
                    
                    
                
                </div>
            </div>
            
            
        </div>
        
        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">              
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="" class="imagepreview" style="width: 100%;" >
              </div>
            </div>
          </div>
        </div>
        
            <hr class="hrvideos sempadding">
        
        <div id="videoarea" style=" <?php if($imovel['video'] == null) echo'display: none;'; ?> ">
            
            <div id="area_linha_video" class="row">
                <div class="linhaVideos">
                    
                    <p class="sempadding legendaelemento">VÍDEOS</p>
                </div>
            </div>
            
            
            <div id="video" class="row sempadding">
                <iframe width="100%" height="415" src="<?=$imovel['video']?>" frameborder="0" allowfullscreen></iframe>
            </div>
            
        </div>
        
        <div id="maparea"  style=" <?php if($imovel['lat'] == null) echo'display: none;'; ?> ">
            
            <div class="row">
                <div class="col-md-12 sempadding">
                    <p class="sempadding legendaelemento" >MAPA</p>
                </div>
            </div>
            
            <div class="row">
                <div id="googleMap"></div>
            </div>
        
        </div>
        
        
        
        
        
        
        
        
        
      
        
        
        
        
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
                
                  <a href="index.php#myModalReg" role="button" class="btnrodape" data-toggle="modal">REGULAMENTO</a>

                  &#x25cf;
 
                  <a href="index.php#myModalTer" role="button" class="btnrodape" data-toggle="modal">TERMOS E CONDIÇÕES</a>  
                
                  &#x25cf;
                
                    <a href="index.php#myModalPol" role="button" class="btnrodape" data-toggle="modal">POLÍTICA DE PRIVACIDADE</a>
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
    
    <script>
    $(function() {
  $('a[href*="#"]:not(.right, .left)').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
        

</script>
      
    
<!-- //script para remover a div do calendario -->
<script>
$(document).ready(function(){
    if (window.outerWidth < 788) {
        $( "#calendario" ).remove();
    }  
});
</script>
    
    
    
    
 <!-- //script para preencher a area do menu -->
<!--<script>
        $(document).ready(function(){
    
        var txt = "";
        txt += "Document width/height: " + $(document).width();
        txt += "x" + $(document).height() + "\n";
    
        var tamanho = $('.corpo').height();
            
            console.log($(document).height());
            console.log($('.corpo').height());
            console.log(tamanho);
            
        if (window.outerWidth > 788) {
            $("#filtro").attr({
                "style" : "height:" + tamanho + "px"
            });
        }
        
   
});
</script>-->
    
    
    
    
    </body>
    
</html>

<?php }?>