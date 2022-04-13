<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/login.scss">
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css2/normalize.css">

    <title>Login</title>
</head>
<body>

     <main class="fondo_login">
         <div class="fondo">

            <img src="img/izquierda.png" alt="">

         </div>
         <div class="form-datos">


             <div class="datos">
                 
             
             <h1>Ingresar</h1>
             <form action="recibe.php" method="POST" id="login-form" >
                 <div class="input-group">

                    <label class="input-fill">

                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <!-- <span class="input-label">Correo Electronico</span> -->
                                          
                    </label>


                 </div>
                 <div class="input-group">

                    <label class="input-fill">

                        <input type="password" name="password" id="password" placeholder="Contraseña" required>
                        <!-- <span class="input-label">Contraseña</span> -->
                                            
                    </label>


                 </div>

                 <button type="submit" name="cuenta" class="btn-enviar">Enviar</button>

                <?php 
                
                    if (isset($_POST['email']) && isset($_POST['password'])) {
                        $datos = [
                            'email' => $_POST['email'],
                            'password' => $_POST['password']
                        ];
                        echo $datos['email'];
                        
                     
                     
                     
                        // $email = $_POST['email'];
                        // $password = $_POST['password'];
                        // $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
                        // $result = mysqli_query($conn, $query);
                        // if (mysqli_num_rows($result) > 0) {
                        //     $row = mysqli_fetch_assoc($result);
                        //     $_SESSION['id'] = $row['id'];
                        //     $_SESSION['nombre'] = $row['nombre'];
                        //     $_SESSION['apellido'] = $row['apellido'];
                        //     $_SESSION['email'] = $row['email'];
                        //     $_SESSION['password'] = $row['password'];
                        //     $_SESSION['rol'] = $row['rol'];
                        //     $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
                        //     $_SESSION['fecha_ingreso'] = $row['fecha_ingreso'];
                        //     $_SESSION['fecha_salida'] = $row['fecha_salida'];
                        //     $_SESSION['estado'] = $row['estado'];
                        //     $_SESSION['foto'] = $row['foto'];
                        //     $_SESSION['id_empresa'] = $row['id_empresa'];
                        //     $_SESSION['id_cosecha'] = $row['id_cosecha'];
                        //     $_SESSION['id_embolsado'] = $row['id_embolsado'];
                        //     $_SESSION['id_novedad'] = $row['id_novedad'];
                        //     $_SESSION['id_lluvia'] = $row['id_lluvia'];
                        //     $_SESSION['id_consolidado'] = $row['id_consolidado'];
                        //     $_SESSION['id_cosecha'] = $row['id_cosecha'];
                            
                    }

                ?>

                 <!-- <img class="imgLogin" alt="" srcset="">
                     <div class="form">
         
                         
                         <div class="orden">
                             <input type="text" value="">
                             <label for="">ID</label>
                         </div>
                         <div class="orden">
                             <input type="password" value="">
                             <label for="">Contraseña</label>
                         </div>
                         <input type="submit" value="Ingresar">
                     </div> -->
                     
                     
                     
                    </form>
                </div>
         </div>
     </main>
    






    
</body>
</html>