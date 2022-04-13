<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/Style.scss">    
    <link rel="stylesheet" href="css/bootstrap.css">    

    
    
    <title>Proyecto</title>
</head>

<body>
  
<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container">
        <article class="article-Logo">
            <div class="imglogo"><img class="logo" src="img/platanos.png" alt=""></div>
            <div class="nomlogo">EXPOBANANA</div>
        </article>



        <article>

<!-- <a class="navbar-brand" href="#"><img class="logo" src="img/papa-noel.png" alt=""></a> -->
<ul class="navbar-nav me-6 mt-2 mt-lg-0 me-sm-2">
    
    <form action="recibe.php" method="post">

        <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
    </form>
    <form action="recibe.php" method="post">
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Digitar</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownId">

            <li><input class="dropdown-item"type="submit" name="registrar" value="embolse" id="embolse"></li>
            <li><input class="dropdown-item" type="submit" name="registrar" value="cosecha" id="cosecha"></li>
            <li><input class="dropdown-item" type="submit" name="registrar" value="novedades" id="novedades"></li>
            <li><input class="dropdown-item" type="submit" name="registrar" value="lluvias" id="lluvias"></li>
            
            
            
        </ul>
    </li>
</form>
    <form action="recibe.php" method="post">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownId">
                
                <li><input class="dropdown-item"type="submit" name="consultar" value="consolidado" id="consolidado"></li>
                <li><input class="dropdown-item" type="submit" name="consultar" value="venta" id="venta"></li>
                <li><input class="dropdown-item" type="submit" name="consultar" value="exportacion" id="exportacion"></li>
                <li><input class="dropdown-item" type="submit" name="consultar" value="terminacion" id="terminacion"></li>
                
                
                
            </ul>
        </li>
    </form>
    <form action="recibe.php" method="post">

        <li class="nav-item active">
            <input class="dropdown-item2" type="submit" value="Sugerencia" name="sugerencia" id="sugerencia">
        </li>
    </form>
    

</article>

<article class="article-perfil" >

<form class="d-flex my-0 my-lg-0" method="post">
<button class="btn btn-outline-success mx-4 my-4 my-sm-5 " value="login" name="" type="submit"><img class="perfil" src="img/hombre.png" alt=""></button>

</article>
</div>
</div>