<?php
include('conexion.php');

$id = $_POST['id'];
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

$update ="UPDATE registro_producto SET nombre=:nom, id_Tproducto_FK=:t_prod, precio_origen=:p_origen, valor_flete=:v_flete, 
                             valor_seguro=:v_seguro,ad_valorem=:ad_valorem, valor_cif=:v_cif,id_impto_adicionalFK=:i_adicional, v_imp_adicional=:v_iadicional, iva=:iva, 
                             valor_bruto=:v_bruto,observaciones=:obs WHERE id = '$id'";

$resultado = $base->prepare($update);

$resultado->execute(array(":nom" => $nombre, ":t_prod" => $t_producto, ":p_origen" => $p_origen, ":v_flete" => $v_flete,
    ":v_seguro" => $v_seguro, ":ad_valorem"=>$v_advalorem,":v_cif"=>$v_cif,":i_adicional" => $i_adicional, ":v_iadicional"=>$v_iAdicional,":iva"=>$iva,":v_bruto"=>$v_total,":obs" => $obs));

header("Location:index.php");