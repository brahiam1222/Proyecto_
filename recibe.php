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
    elseif (isset($_POST["login"])) {
        
        $paginaConsulta=$_POST["login"];
        header("location: ".$paginaConsulta.".php");
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $datos = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        echo $datos['email'];
    }
    
    if (isset($_POST["cuenta"])) {
        if ($datos['email']=='brahiam-1222@hotmail.com'&& $datos['password']=='123') {
            header("location: index.php");
        }
        else{

            header("location: login.php");
            
        }

        }

       


?>