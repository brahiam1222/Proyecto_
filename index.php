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
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
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
                    <input class="dropdown-item" type="submit" value="Sugerencia" name="sugerencia" id="sugerencia">
                </li>
            </form>
            
        
</article>

<article class="article-perfil">
    
    <form class="d-flex my-0 my-lg-0">
        <button class="btn btn-outline-success mx-4 my-2 my-sm-1 " type="button"><img class="perfil" src="img/papa-noel.png" alt=""></button>
    
</article>
</div>
</nav>

<?php 

    // if (isset($_POST["registrar"])) {
        
        
    //     // $paginaRegistro=$_POST['registrar'];
    //     // include("registros/".$paginaRegistro.".php");

    // }



?>


<div class="container">

    <div class="table-responsive">
        <table  class="table align-middle table-bordered">
            <thead>
            <th scope="col">sem_cosecha</th>
                    <th scope="col">fecha</th>
                    <th scope="col">finca</th>
                    <th scope="col">destino</th>
            </th>

            <tr>
                <td scope="row"><input type="week" name="" id=""></td>
                <td scope="row"><input  type="date" name="" id=""></td>
                <td scope="row"><select name="Finca" value=""id="Finca"></select></td>
                <td scope="row" class="table-light" id="bloqueo" >exportacion</td>
            </tr>
               
        </thead>
        <tbody>
        <tr>
                    
                    <th scope="col">sem_embolse</th>
                    <th scope="col">cinta</th>
                    <th scope="col">edad</th>
                    <th scope="col">lt_01</th>
                    <th scope="col">lt_02</th>
                    <th scope="col">lt_03</th>
                    <th scope="col">lt_04</th>
                    <th scope="col">lt_05</th>
                    <th scope="col">lt_06</th>
                    <th scope="col">lt_07</th>
                    <th scope="col">lt_08</th>
                    <th scope="col">lt_09</th>
                    <th scope="col">lt_10</th>
                    <th scope="col">lt_12</th>
                    <th scope="col">lt_13</th>
                    <th scope="col">lt_14</th>
                    <th scope="col">lt_15</th>
                    <th scope="col">lt_16</th>
                    <th scope="col">lt_17</th>
                    <th scope="col">lt_18</th>
                    <th scope="col">lt_19</th>
                    <th scope="col">lt_20</th>
                    <th scope="col">lt_21</th>
                    <th scope="col">lt_22</th>
                    <th scope="col">lt_23</th>
                    <th scope="col">lt_24</th>
                    <th scope="col">lt_25</th>
                    <th scope="col">lt_26</th>
                    <th scope="col">Total</th>
                
                
                </tr>
           

            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" name="cinta" ></td>
                <td><input class="lote" type="text" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                <td><input class="lote"  class="lotes" type="number" name="" ></td>
                
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>


</div>
</div>
</form>






</article>
<!-- <div class="ratio ratio-4x3">
<iframe width="402" height="346" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=7CBD4D7F63B723F9%212836&authkey=%21ADSVKS00Qqt_koo&em=2&AllowTyping=True&ActiveCell='Hoja%201'!A1&wdInConfigurator=True"></iframe>
</div> -->
<?php include("pie.php")?>
</body>

 
</html>