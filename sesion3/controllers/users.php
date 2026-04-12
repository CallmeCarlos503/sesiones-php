<?php
include_once('../modules/conn.php');
session_start();
if (isset($_POST['btn-sesion'])) {
    try {
        $correo= $_POST['txtcorreo'];
        $password=hash('sha256',$_POST['txtpassword']);

        $sql= "SELECT * FROM usuarios where PASSWOR='".$password."' AND CORREO='".$correo."'";
        $result= $conexion -> query($sql);
        if ($result && $result-> num_rows>0) {
            $row=$result -> fetch_assoc();
            $_SESSION['ID']= $row['ID'];
            $_SESSION['Nombre']= $row['NOMBRE'];
            $_SESSION['Telefono']= $row['TELEFONO'];
            $_SESSION['Rol']= $row['Rol'];
            $_SESSION['Correo']= $row['CORREO'];
            header("Location:../principal.php");
        }else{
            header("Location:../index.php?denied=true");
            
        }
    } catch (Exception $ex) {
    }
}else if (isset($_POST['btn-user'])) {
     $nombre= $_POST['txtnombre'];
     $apellido = $_POST['txtapellido'];
     $dui = $_POST['txtdui'];
     $tel = $_POST['txttel'];
     $correo = $_POST['txtcorreo'];
     $rol = $_POST['cborol'];
     $password =hash('sha256',$_POST['txtpassword']);
     $sql= 
     "
        INSERT INTO usuarios (NOMBRE,APELLIDO,DUI,TELEFONO,CORREO,PASSWOR,Rol)
        VALUES('$nombre','$apellido','$dui','$tel','$correo','$password','$rol') 
     ";
     if ($conexion->query($sql)== true) {
         header("Location:../principal.php");
     }else{
        echo "Error: ".$conexion->error;
     }
}else if(isset($_REQUEST['id-edit'])){
    $ID= $_REQUEST['id-edit'];
    $result= $conexion-> query("SELECT * FROM usuarios where ID='$ID'");
    if ($row = $result-> fetch_assoc()) {
        header("Location:../principal.php?ID= $row[ID]&NOMBRE= $row[NOMBRE]&APELLIDO= $row[APELLIDO]&DUI= $row[DUI]&TELEFONO=$row[TELEFONO]&CORREO=$row[CORREO]&PASSWOR=$row[PASSWOR]&LOGICO=true");
    }
}else if(isset($_POST['btn-edit'])){
    $ID= $_POST['btn-edit'];
    $nombre= $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
     $dui = $_POST['txtdui'];
     $tel = $_POST['txttel'];
     $correo = $_POST['txtcorreo'];
     $rol = $_POST['cborol'];
     $sql=
     "
     UPDATE usuarios SET NOMBRE= '$nombre', APELLIDO='$apellido',
     DUI= '$dui',TELEFONO = '$tel', CORREO= '$correo', Rol= '$rol'
     WHERE ID= '$ID' 
     ";
     if ($conexion->query($sql)==true) {
        header("Location: ../principal.php");
     }else{
        echo "Error de actualizacion: ". $conexion->error;
     }
}else if(isset($_POST['btn-cancel'])){
    header("Location: ../principal.php");
}else if(isset($_REQUEST['id-delete'])){
   $id= $_REQUEST['id-delete'];
   $sql= 
   "
   DELETE FROM usuarios WHERE ID = '$id'
   ";
   if ($conexion->query($sql)==true) {
     header("Location: ../principal.php");
   }else{
    echo "Error al eliminar: ".$conexion->error;
   }
}
