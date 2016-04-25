<script>

    jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menu ul').toggleClass('active');
 
        e.preventDefault();
    });
});

</script>

<script>
        $(document).ready(function(){
    
        var txt = "";
        txt += "Document width/height: " + $(document).width();
        txt += "x" + $(document).height() + "\n";
    
        var tamanho = $(document).height();
            
            console.log($(document).height());
            console.log($('#corpo').height());
            console.log(tamanho);
            
    
            $("#corpo").attr({
                "style" : "height:" + tamanho + "px"
            });
        
        
   
});
</script>


</body>
</html>
