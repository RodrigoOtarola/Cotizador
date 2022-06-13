<!--principal del sitio-->
<?php include('layouts/layoutNav.php');

include('conexion.php');

$registros = $base->query("SELECT rg.id, rg.nombre, tp.Tipo_producto, rg.precio_origen, rg.valor_flete, rg.valor_seguro, rg.ad_valorem, rg.v_imp_adicional,rg.iva, rg.valor_bruto
FROM registro_producto AS rg INNER JOIN tipo_producto AS tp ON(tp.id=rg.id_Tproducto_FK) WHERE rg.estado = 1
ORDER BY (rg.id) DESC")->fetchAll(PDO::FETCH_OBJ);
?>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
</script>

<link rel="stylesheet" href="librerias/sweetAlert/package/dist/sweetalert2.min.css" type="text/css">&nbsp;
&nbsp;
<div class="container">
    <div class="card-pannel grey lighten-5">
        <table class="striped centered responsive-table">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Tipo</th>
                <th>Precio Origen</th>
                <th>Flete</th>
                <th>Seguro</th>
                <th>Ad valorem</th>
                <th>I. Adicional</th>
                <th>I.V.A.</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($registros as $listado): ?>
                <tr>
                    <td><?php echo $listado->nombre ?> </td>
                    <td><?php echo $listado->Tipo_producto ?></td>
                    <td><?php echo $listado->precio_origen ?></td>
                    <td><?php echo $listado->valor_flete ?></td>
                    <td><?php echo $listado->valor_seguro ?></td>
                    <td><?php echo $listado->ad_valorem ?></td>
                    <td><?php echo $listado->v_imp_adicional ?></td>
                    <td><?php echo $listado->iva ?></td>
                    <td><?php echo $listado->valor_bruto ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $listado->id ?>">
                            <i class="material-icons blue-text">edit</i></a>

                        <a href="delete.php?id=<?php echo $listado->id ?>" id="eliminar" data-id="<?php echo $listado->id ?>" onclick="return eliminar()">
                            <i class="material-icons red-text">delete</></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
<!--            <script type="text/javascript" src="librerias/sweetAlert/package/dist/sweetalert2.all.min.js"></script>-->
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script type="text/javascript" src="js/app.js"></script>
        </table>
    </div>
</div>