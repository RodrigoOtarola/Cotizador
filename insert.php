<?php

include('conexion.php');

if (isset($_POST['create'])) {
    $nombre = $_POST['nombre'];
    $t_producto = $_POST['tipo_producto'];
    $p_origen = $_POST['p_origen'];
    $v_flete = $_POST['v_flete'];
    $v_seguro = $_POST['v_seguro'];
    $v_advalorem = $_POST['v_advalorem'];
    $v_cif = $_POST['v_cif'];
    $i_adicional = $_POST['impto_adicional'];
    $v_iAdicional = $_POST['v_iadicional'];
    $iva = $_POST['iva'];
    $v_total = $_POST['v_total'];
    $obs = $_POST['observaciones'];

    $insert = "INSERT INTO registro_producto(id, nombre,id_Tproducto_FK,precio_origen,valor_flete,valor_seguro,ad_Valorem,valor_cif,impto_adicional,v_imp_adicional,
                              iva,valor_bruto,observaciones)
VALUES(0,:nom,:t_prod,:p_origen,:v_flete,:v_seguro,:ad_valorem,:v_cif,:i_adicional,:v_iadicional,:iva,:v_bruto,:obs)";

    $resultado = $base->prepare($insert);

    $resultado->execute(array(":nom" => $nombre, ":t_prod" => $t_producto, ":p_origen" => $p_origen, ":v_flete" => $v_flete, ":v_seguro" => $v_seguro,
        ":ad_valorem" => $v_advalorem, ":v_cif" => $v_cif, ":i_adicional" => $i_adicional, ":v_iadicional" => $v_iAdicional, ":iva" => $iva, ":v_bruto" => $v_total, ":obs" => $obs));

    $resultado->closeCursor();

    header("Location:index.php");
}





