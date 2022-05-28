<?php

include('conexion.php');

$id = $_GET['id'];

$delete=$base->query("UPDATE registro_producto SET estado=0 WHERE id = '$id'");

header("Location:index.php");