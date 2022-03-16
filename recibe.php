<?php 

    if (isset($_POST["registrar"])) {

        $paginaRegistro=$_POST["registrar"];
        header("location: registros/".$paginaRegistro.".php");
    }
    elseif (isset($_POST["consultar"])) {
        
        $paginaConsulta=$_POST["consultar"];
        header("location: consultas/".$paginaConsulta.".php");
    }
    
    elseif (isset($_POST["sugerencia"])) {
        
        $paginaConsulta=$_POST["sugerencia"];
        header("location: ".$paginaConsulta.".php");
    }
    


?>