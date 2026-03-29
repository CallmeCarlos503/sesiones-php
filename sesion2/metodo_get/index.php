<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h2>
            Ejemplo de GET
        </h2>
        <br>
        <label for="">Inserte su nombre</label>
        <br>
        <input type="text" name="txtnombre" id="">
        <br>
        <label for="">Inserte su contraseña</label>
        <br>
        <input type="password" name="txtpassword" id="">
        <br><br>
        <input type="submit" value="Iniciar sesion">
    </form>
    <?php
      $guardado="Juan";
      $passG="123";
      if (isset($_GET['txtnombre'])&& isset($_GET['txtpassword'])) {
          $usuario= $_GET['txtnombre'];
          $password= $_GET['txtpassword'];
          if ($usuario==$guardado && $password==$passG) {
             echo "El usuario es correcto";
          }else{
            echo "El usuario es incorrecto";
          }
      } 
     ?>
</body>
</html>