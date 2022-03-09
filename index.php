<?php include("cabecera.php")?>
<body>
  
<nav class="navbar navbar-expand navbar-light bg-faded">
    <div class="container ">
        <article class="article-Logo">
            <div class="imglogo"><img class="logo" src="img/papa-noel.png" alt=""></div>
            <div class="nomlogo">SOCIEDAD</div>
        </article>
    <article>

        <!-- <a class="navbar-brand" href="#"><img class="logo" src="img/papa-noel.png" alt=""></a> -->
        <ul class="navbar-nav me-6 mt-2 mt-lg-0 me-sm-2">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Digitar</a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sugerencias</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <ul> <div class="dropdown-menu" aria-labelledby="dropdownId">

                    <li><a class="dropdown-item" href="registros/embolse.php">Action 1</a></li>
                    <li><a class="dropdown-item" href="registros/embolse.php">Action 2</a></li>
                </div>
                
            </ul>
        </li>
    </ul>
</article>

    
<article class="article-perfil">
    
    <form class="d-flex my-0 my-lg-0">
        <button class="btn btn-outline-success mx-4 my-2 my-sm-1 " type="button"><img class="perfil" src="img/papa-noel.png" alt=""></button>
    </form>
</article>
    </div>
</nav>
<div class="ratio ratio-4x3">
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTqWxJkYUPU3QtmkAy7gSy2NzBLTDGKNDnRdQ43FLf5RuC-pV4yKyb423XQ46VLecFob1qsBMNiVzPK/pubhtml?widget=true&amp;headers=false"></iframe>
</div>
</body>

  <?php include("pie.php")?>
</html>