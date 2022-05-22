<?php
include('conexion.php');

$id = $_GET['id'];

$base->query("UPDATE registro_producto SET estado = 1 WHERE id = $id");



header("Location:index.php");