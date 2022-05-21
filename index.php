<!--principal del sitio-->
<?php include('layouts/layoutNav.php');

include('conexion.php');

$registros=$base->query("SELECT rg.id, rg.nombre, tp.Tipo_producto, rg.precio_origen, rg.valor_flete, rg.valor_seguro, rg.ad_valorem, rg.iva, rg.valor_bruto
FROM registro_producto AS rg JOIN tipo_producto AS tp ON(tp.id=rg.id_Tproducto_FK) JOIN impuesto as imp ON(imp.id=rg.id_impto_adicionalFK)
ORDER BY (rg.id) DESC")->fetchAll(PDO::FETCH_OBJ);

?>
&nbsp;
&nbsp;
<div class="container">
    <div class="card-pannel grey lighten-5">
        <table class="striped centered table-responsive">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Tipo</th>
                <th>Precio Origen</th>
                <th>Flete</th>
                <th>Seguro</th>
                <th>Ad valorem</th>
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
                <td><?php echo $listado->iva ?></td>
                <td><?php echo $listado->valor_bruto ?></td>
                <td>
                    <button name="edit"><a href="update.php?id<?php echo $listado->id?> & nom<?php echo $listado->nombre?> & po<?php echo $listado->precio_origen?> & vf<?php echo $listado->valor_flete?>">
                        <i class="material-icons blue-text">edit</i></a></button>
                    <a href=""><i class="material-icons red-text">delete</i></a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
