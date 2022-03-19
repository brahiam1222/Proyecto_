<?php 

    if (isset($_POST["registrar"])) {

        $paginaRegistro=$_POST["registrar"];
        header("location: ".$paginaRegistro.".php");
    }
    elseif (isset($_POST["consultar"])) {
        
        $paginaConsulta=$_POST["consultar"];
        header("location: ".$paginaConsulta.".php");
    }
    
    elseif (isset($_POST["sugerencia"])) {
        
        $paginaConsulta=$_POST["sugerencia"];
        header("location: ".$paginaConsulta.".php");
    }
    


?>