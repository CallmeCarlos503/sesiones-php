<?php
 if (isset($_REQUEST['txtproducto']) && isset($_REQUEST['txtprecio'])) {
    $nombre=$_REQUEST['txtproducto'];
    $precio= $_REQUEST['txtprecio'];
    echo("El producto ".$nombre." tiene el precio de ".$precio);
 }
?>