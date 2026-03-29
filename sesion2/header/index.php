<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <h2>
        Ejemplo de Header
    </h2>
    <form action="" method="post">
        <label for="">Inserte su correo</label>
        <br>
        <input type="email" name="txtcorreo" id="" require>
        <br>
        <label for="">Inserte su password</label>
        <br>
        <input type="password" name="txtpassword" id="" require>
        <br><br>
        <input type="submit" value="Iniciar sesion">
        <br><br>
        <input type="reset" value="eliminar datos">
    </form>
    <?php
       $guardo="Maria@gmail.com";
       $PassG= "123";
       if (isset($_POST['txtcorreo']) && isset($_POST['txtpassword'])) {
          $usuario=$_POST['txtcorreo'];
          $password=$_POST['txtpassword'];
          if ($usuario==$guardo && $password==$PassG) {
              header("Location:principal.php");
          }else{
            echo "Error de inicio de sesion, usuario no existe";
          }
       }
    ?>
</body>
</html>