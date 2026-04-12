<!DOCTYPE html>
<html lang="en">
<?php
include_once("./modules/datos.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
      <?php
    include_once('./modules/navbar.php');
    ?>
    <br><br><br>
    <div class="container">

        <div class="card">
            <div class="card-body">
                    <center>
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png" width="200px" class="img" alt="...">
                    </center>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <br>
                        <p style="font-size: 30px;">
                            <?php
                            echo $_SESSION['Correo']
                            ?>
                        </p>
                    </div>
                    
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                        <br>
                        <p style="font-size: 30px;">
                             <?php
                            echo $_SESSION['Telefono']
                            ?>
                        </p>
                    </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Rol a desempeñar</label>
                        <br>
                        <p style="font-size: 30px;">
                             <?php
                            $rol= $_SESSION['Rol'];
                            if ($rol==1) {
                                echo 
                                "
                                <h1> ADMINISTRADOR </h1>
                                ";
                            }
                            else if ($rol==2) {
                                echo 
                                "
                                <h1> Empleado </h1>
                                ";
                            }else if ($rol==3) {
                                echo 
                                "
                                <h1> Programador </h1>
                                ";
                            }else{
                                echo"
                                <h1> OTROS </h1>
                                ";
                            }
                            ?>
                        </p>
                    </div>
                    <center>
                        <a href="./modules/out.php" class="btn btn-secondary" style="font-size: 20px;"> Cerrar sesion</a>
                        
                    </center>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>