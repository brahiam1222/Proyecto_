<?php include("cabecera.php")?>



<?php 
$lts = array("lt_01","lt_02","lt_03","lt_04","lt_05","lt_06","lt_07","lt_08","lt_09","lt_10","lt_11","lt_12","lt_13","lt_14","lt_15","lt_16","lt_17","lt_18","lt_19","lt_20");
?>

<h1 class="linea-efecto" >EMBOLSE</h1> 
    
<?php 

    // if (isset($_POST["registrar"])) {
        
        
    //     // $paginaRegistro=$_POST['registrar'];
    //     // include("registros/".$paginaRegistro.".php");

    // }



?>


<div class="container">
    
    <div class="table-responsive">
        <table  id="table2" class="table align-middle table-bordered">
            <thead>
                        <form id="datosHead" action="" method="post">
                        <th scope="col">sem_cosecha</th>
                        <th scope="col">fecha</th>
                        <th scope="col">finca</th>
                        <th scope="col">destino</th>
                    </th>
                    
                    <tr>
                        <td scope="row"><input type="week" name="" id=""></td>
                        <td scope="row"><input  type="date" name="" id=""></td>
                        <td scope="row"><select name="Fincas" value=""id="Fincas" form="datosHead">
                            <option value="Manantiales">Manantiales</option>
                            <option value="Madelandia">Madelandia</option>
                            <option value="Santa_Helena">Santa_Helena</option>
                            <option value="Corrales">Corrales</option>
                        </select></td>
                        <td scope="row" class="table-light" id="bloqueo" >EXPORTACION</td>
                    </tr>
                    
                </form>
                </thead>
        <tbody>
            <form action="" method="post"></form>
        <tr>
                    
                    <th scope="col">sem_embolse</th>
                    <th scope="col">cinta</th>
                    <th scope="col">edad</th>
                    <?php 
                    foreach ($lts as $lt) { 
                        echo "<th scope='col'>".$lt."</th>";
                    }?></th>
                   
                    <th scope="col">Total</th>
                
                
                </tr>
           

            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" list="coloresFinca" value="#ff0000" name="cinta">
                
                </td>
                <td><input class="lote" type="text" name="" ></td>
                <?php 
                    foreach ($lts as $lt) { 
                        echo "<td><input class='lote'  type='number' name='' ></td>";
                    }?></th>
                <td><input class="total" type="text" name="" ></td>
               
                
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" list="coloresFinca" value="#8100DE" name="cinta">
                
                </td>
                <td><input class="lote" type="text" name="" ></td>
                <?php 
                    foreach ($lts as $lt) { 
                        echo "<td><input class='lote'  type='number' name='' ></td>";
                    }?></th>
                <td><input class="total" type="text" name="" ></td>
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" list="coloresFinca" value="#DEDA00" name="cinta">
                
                </td>
                <td><input class="lote" type="text" name="" ></td>
                <?php 
                    foreach ($lts as $lt) { 
                        echo "<td><input class='lote'  type='number' name='' ></td>";
                    }?></th>
                <td><input class="total" type="text" name="" ></td>
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" list="coloresFinca" value="#1525FB" name="cinta">
                
                </td>
                <td><input class="lote" type="text" name="" ></td>
                <?php 
                    foreach ($lts as $lt) { 
                        echo "<td><input class='lote'  type='number' name='' ></td>";
                    }?></th>
                <td><input class="total" type="text" name="" ></td>
            </tr>
            <tr>
                <td><input class="sem-embo" type="text" name="" ></td>
                <td><input type="color" list="coloresFinca" value="#1BB000" name="cinta">
                
                </td>
                <td><input class="lote" type="text" name="" ></td>
                <?php 
                    foreach ($lts as $lt) { 
                        echo "<td><input class='lote'  type='number' name='' ></td>";
                    }?></th>
                <td><input class="total" type="text" name="" ></td>
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