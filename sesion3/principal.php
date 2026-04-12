<!DOCTYPE html>
<html lang="en">
<?php 
include_once('./modules/conn.php');

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    include_once('./modules/navbar.php');
    ?>
    <div class="container">
        <br><br><br><br>
        <div class="row align-items-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="./controllers/users.php" method="post">
                            <center>
                                <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png"
                                    width="300px" class="img" alt="...">
                                <br>
                                <h2>Agregar usuario</h2>
                            </center>
                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Juanito" name="txtnombre" value="<?php echo $_GET['NOMBRE'] ?? ''   ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Alcachofa" value="<?php echo $_GET['APELLIDO'] ?? ''   ?>" name="txtapellido" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">DUI:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="059732-5" value="<?php echo $_GET['DUI'] ?? ''   ?>" name="txtdui" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Numero de Telefono:</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1"
                                    placeholder="71680706" value="<?php echo $_GET['TELEFONO'] ?? ''   ?>" name="txttel" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Correo Electronico:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Carlosgeek503@gmail.com" value="<?php echo $_GET['CORREO'] ?? ''   ?>" name="txtcorreo" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contraseña:</label>
                                <?php
                                if (isset($_REQUEST['LOGICO'])) {
                                    echo"
                                    <input type='password' class='form-control' id='exampleFormControlInput1'
                                    placeholder='****************' name='txtpassword' readonly>
                                    ";
                                }else{
                                ?>
                                <input type="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="****************" name="txtpassword" required>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Rol</label>
                                <select name="cborol" id="rol" class="form-control">
                                    <option value="">
                                        -- Selecciona el rol --
                                    </option>
                                    <?php
                                      $sql2= 'SELECT * FROM Roles';
                                      $result = $conexion -> query($sql2);
                                        if ($result -> num_rows>0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo"
                                                <option value='$row[ID]'>
                                                     $row[Nombre]
                                                 </option>
                                                
                                                ";
                                            }
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                            <center>
                                <?php
                                if (isset($_REQUEST['LOGICO'])) {
                                    $idUSER=$_REQUEST['ID'];
                                    echo
                                    ("
                                    <button type='submit' name='btn-edit' value=$idUSER class='btn btn-primary'>Modificar Usuario</button>
                                    <br><br>
                                    <button type='submit' name='btn-cancel' value='true' class='btn btn-primary'>Cancelar Modificacion</button>
                                    ");
                                }else{
                                ?>
                                <button type="submit" name="btn-user" value="true" class="btn btn-primary">Añadir usuario</button>
                                <?php
                                }
                                ?>
                            </center>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col">

            </div>
            <div class="col-7">
                <table class="table table-dark table-hover" style="font-size: large;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DUI</th>
                            <th scope="col">Numero de Telefono</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $sql= 'SELECT * FROM roles,usuarios WHERE usuarios.Rol= roles.ID ORDER BY usuarios.Rol DESC ';
                        $result= $conexion ->query($sql);
                        if ($result->num_rows>0) {
                            while ($row = $result ->fetch_assoc()) {
                                echo"
                                
                                <tr>
                            <th scope='row'>$row[ID]</th>
                            <td>$row[NOMBRE]</td>
                            <td>$row[APELLIDO]</td>
                            <td>$row[DUI]</td>
                            <td>$row[TELEFONO]</td>
                            <td>$row[CORREO]</td>
                            <td>$row[Nombre]</td>
                            <td>
                             <a href='./controllers/users.php?id-delete=$row[ID]'>
                                <i class='bi bi-person-dash-fill' 
                                style='font-size: 20px;'></i>
                                <a/>
                                <a href='./controllers/users.php?id-edit=$row[ID]'>
                                <i class='bi bi-pencil' 
                                style='font-size: 20px;'></i>
                                </a>
                            </td>
                        </tr>
                                ";
                            }
                        }
                        ?>
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>