<?php
include('conexion.php');

include('layouts/layoutNav.php');

$Tipo_producto = $base->query("SELECT * FROM tipo_producto")->fetchAll(PDO::FETCH_OBJ);

$Impto_adicional = $base->query("SELECT * FROM impuesto WHERE id IN (1,2,3,4)")->fetchAll(PDO::FETCH_OBJ);

$id = $_GET['id'];

$select = $base->query("SELECT rg.id, rg.nombre, tp.Tipo_producto, rg.precio_origen, rg.valor_flete, rg.valor_seguro, rg.ad_valorem,imp.valor, rg.iva,imp.valor, rg.valor_bruto, rg.observaciones
FROM registro_producto AS rg INNER JOIN tipo_producto AS tp ON(tp.id=rg.id_Tproducto_FK)
INNER JOIN impuesto as imp ON(imp.id=rg.id_impto_adicionalFK) WHERE rg.estado = 1 AND rg.id = '$id'")->fetchAll(PDO::FETCH_OBJ);


?>
<form action="update.php" method="POST" autocomplete="off">
    <div class="container section">
        <div class="row card-panel">
            <div class="input-field col s12 m6 l6">
                <?php foreach ($select as $listado): ?>
                    <input type="hidden" name="id" value="<?php echo $listado->id ?>">
                    <input type="text" id="name" name="nombre" class="validate" value="<?php echo $listado->nombre ?>"
                           required>
                <?php endforeach; ?>
                <label for="name">Nombre:</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <select name="tipo_producto" id="tipo_producto">
                    <option value="">Seleccione</option>
                    <?php foreach ($Tipo_producto as $tipo_producto): ?>
                        <option value="<?php echo $tipo_producto->id ?>"
                                selected="<?php $listado->Tipo_producto ?>"><?php echo $tipo_producto->Tipo_producto ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Tipo de Producto:</label>
            </div>
            <?php foreach ($select as $listado): ?>
                <div class="input-field col s12 m3 l3">
                    <input type="number" id="p_origen" name="p_origen" class="validate"
                           value="<?php echo $listado->precio_origen ?>" required>
                    <label for="p_origen">Precio origen:</label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input type="number" id="v_flete" name="v_flete" class="validate"
                           value="<?php echo $listado->valor_flete ?>" required>
                    <label for="v_flete">Valor flete:</label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input type="number" id="v_seguro" name="v_seguro" class="validate"
                           value="<?php echo $listado->valor_seguro ?>" required>
                    <label for="v_seguro">Valor seguro:</label>
                </div>
            <?php endforeach; ?>
            <div class="input-field col s12 m3 l3">
                <select name="impto_adicional" id="impto_adicional">
                    <option value="">Seleccione</option>
                    <?php foreach ($Impto_adicional as $impto_adicional): ?>
                        <option value="<?php echo $impto_adicional->id ?>"><?php echo $impto_adicional->impto ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Impuesto Adicional:</label>
            </div>
            <div class="input-field col s12 m12">
                <textarea id="textarea" name="observaciones"
                          class="materialize-textarea"><?php echo $listado->observaciones ?></textarea>
                <label for="textarea">Observaciones:</label>
            </div>
            <div class="col s12">
                <button type="submit" class="btn red" name="create">Actualizar</button>
            </div>
        </div>
</form>