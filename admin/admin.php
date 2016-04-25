<?php 
session_start();
if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] == 'admin'){
?>



<?php
include 'header.php';
?>    
    
<div class="container-fluid sempadding">
    
    <div id="linha" class=""></div>
    
    
    <div id="corpo" class="col-xs-12 col-sm-12 col-md-12">
        
        
        <?php include 'menu.php' ;?>
        
        
        <div id="cima" class="col-md-12 ">
            <img class="tamanhologo center-block logo" src="img/logo.png">
        </div>
    </div>
        

    

</div>





<script>
   $(document).ready(function(){
        $(".logo").addClass("bounceIn animated");   
        //$(".logo").removeClass("bounceIn animated");   
    });
</script>

<script>
    $(".logo").hover(function(){
        $(".logo").toggleClass("bounceIn animated");
    });
</script>

<?php include 'footer.php'; ?>    





<?php    
}else{
    header("location: login.php");
}



