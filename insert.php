<?php

include('conexion.php');

if (isset($_POST['create'])){
    $nombre = $_POST['nombre'];
    $t_producto = $_POST['tipo_producto'];
    $p_origen = $_POST['p_origen'];
    $v_flete = $_POST['v_flete'];
    $i_adicional = $_POST['impto_adicional'];
    $obs = $_POST['observaciones'];

    $insert="INSERT INTO registro_producto(id, nombre,id_Tproducto_FK,precio_origen,valor_flete,id_impto_adicionalFK,observaciones)
VALUES(0,:nom,:t_prod,:p_origen,:v_flete,:i_adicional,:obs)";

    $resultado=$base->prepare($insert);

    $resultado->execute(array(":nom"=>$nombre,":t_prod"=>$t_producto, ":p_origen"=>$p_origen, ":v_flete"=>$v_flete,":i_adicional"=>$i_adicional, ":obs"=>$obs));

    $resultado->closeCursor();

    header("Location:index.php");
}





