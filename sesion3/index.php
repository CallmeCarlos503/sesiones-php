<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <nav class="navbar  bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sesion 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio de sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Acerca de Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Otros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="container">

        <div class="card">
            <div class="card-body">
                <form action="./controllers/users.php" method="post">
                    <center>
                    <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png" width="300px" class="img" alt="...">

                    </center>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Carlosgeek503@gmail.com" name="txtcorreo" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"
                            placeholder="*************" name="txtpassword" required>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" name="btn-sesion" value="iniciar sesion">Iniciar sesion</button>
                    </center>
                </form>
                <br><br>
                <?php 
                  if (isset($_REQUEST['denied'])) {
                      echo "
                      
                    <div class='alert alert-danger' role='alert'>
                    Contraseña o correo equivocados, favor intentar nuevamente
                    </div>
                      ";
                  }else if (isset($_REQUEST['denied2'])) {
                      echo "
                      
                    <div class='alert alert-danger' role='alert'>
                    Inicie sesion correspondientemente
                    </div>
                      ";
                  }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>