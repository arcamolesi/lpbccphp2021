<?php
    //abre a sessão
    session_start();
    
    //destrói as variáveis de sessão
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']); 

    //redireciona para index.php-login
    Header("location: index.php"); 
?>