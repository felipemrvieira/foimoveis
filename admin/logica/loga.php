<?php
if($_POST['usuario'] == 'admin' && $_POST['senha'] == 'rox'){
    session_start();
    $_SESSION['usuarioLogado'] = 'admin';
    header("location: ../admin.php");
}else{
     header("location: ../login.php");
}