<?php
include('conexion.php');

include('layouts/layoutNav.php');

$Tipo_producto=$base->query("SELECT * FROM tipo_producto")->fetchAll(PDO::FETCH_OBJ);
$Impto_adicional=$base->query("SELECT * FROM impuesto WHERE id IN (1,2,3,4)")->fetchAll(PDO::FETCH_OBJ);


?>
<form action="insert.php" method="POST" autocomplete="off">
    <div class="container section">
        <div class="row card-panel">
            <div class="input-field col s12 m6 l6">
                <input type="text" id="name" name="nombre" class="validate" value="<?php echo $buscar->nombre?>" required>
                <label for="name">Nombre:</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <select name="tipo_producto" id="tipo_producto">
                    <option value="">Seleccione</option>
                    <?php foreach ($Tipo_producto as $tipo_producto): ?>
                        <option value="<?php echo $tipo_producto->id ?>"><?php echo $tipo_producto->Tipo_producto ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Tipo de Producto:</label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input type="number" id="p_origen" name="p_origen" class="validate" required>
                <label for="p_origen">Precio origen:</label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input type="number" id="v_flete" name="v_flete" class="validate" required>
                <label for="v_flete">Valor flete:</label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input type="number" id="v_seguro" name="v_seguro" class="validate" required>
                <label for="v_seguro">Valor seguro:</label>
            </div>
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
                <textarea id="textarea" name="observaciones" class="materialize-textarea"></textarea>
                <label for="textarea">Observaciones:</label>
            </div>
            <div class="col s12">
                <button type="submit" class="btn red" name="create">Enviar</button>
            </div>
        </div>
</form>