<?php include("cabecera.php")?>
<body>
  
<nav class="navbar navbar-expand navbar-light bg-faded">
    <div class="container ">
        <a class="navbar-brand" href="#"><img class="logo" src="img/papa-noel.png" alt=""></a>
        <ul class="navbar-nav me-6 mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Active <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
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
        
        <form class="d-flex my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0 " type="button">PERFIL</button>
        </form>
    </div>
</nav>
</body>

  <?php include("pie.php")?>
</html>