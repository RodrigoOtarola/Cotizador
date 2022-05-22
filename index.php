<!--principal del sitio-->
<?php include('layouts/layoutNav.php');

include('conexion.php');

$registros=$base->query("SELECT rg.id, rg.nombre, tp.Tipo_producto, rg.precio_origen, rg.valor_flete, rg.valor_seguro, rg.ad_valorem,imp.valor, rg.iva,imp.valor, rg.valor_bruto
FROM registro_producto AS rg INNER JOIN tipo_producto AS tp ON(tp.id=rg.id_Tproducto_FK)
INNER JOIN impuesto as imp ON(imp.id=rg.id_impto_adicionalFK) WHERE rg.estado = 1
ORDER BY (rg.id) DESC")->fetchAll(PDO::FETCH_OBJ);

?>
&nbsp;
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
            <?php foreach($registros as $listado): ?>
            <tr>
                <td><?php echo $listado->nombre ?> </td>
                <td><?php echo $listado->Tipo_producto ?></td>
                <td><?php echo $listado->precio_origen ?></td>
                <td><?php echo $listado->valor_flete ?></td>
                <td><?php echo $listado->valor_seguro ?></td>
                <td><?php echo $listado->ad_valorem ?></td>
                <td></td>
                <td><?php echo $listado->iva ?></td>
                <td><?php echo $listado->valor_bruto ?></td>
                <td>
                    <button><a href="edit.php?id=<?php echo $listado->id ?>" >
                        <i class="material-icons blue-text">edit</i></button>
                        <button><a href="delete.php?id=<?php echo $listado->id ?>" id="eliminar" onclick="eliminar()"><i class="material-icons red-text">delete</i></a></button</td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>