<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Temperaturas */
/* @var $form yii\widgets\ActiveForm */
$list=['01' => '01| Azuay', '02' => '02| Bolivar', '03' => '03| Cañar', '04' => '04| Carchi', '05' => '05| Cotopaxi', '06' => '06| Chimborazo', '07' => '07| El Oro', '08' => '08| Esmeraldas', '09' => '09| Guayas', '10' => '10| Imbabura', '11' => '11| Loja', '12' => '12| Los Rios', '13' => '13| Manabí', '14' => '14| Morona Santiago', '15' => '15| Napo', '16' => '16| Pastaza', '17' => '17| Pichincha', '18' => '18| Tungurahua', '19' => '19| Zamora Chinchipe', '20' => '20| Galápagos', '21' => '21| Sucumbios', '22' => '22| Orellana', '23' => '23| Sto. Domingo de los Tsachilas', '24' => '24| Santa Elena'];
?>

<div class="temperaturas-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="col-md-6">
    <?= $form->field($model, 'cod')->textInput()->dropdownList($list, ['prompt' => 'Seleccionar...']) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'fecha')->textInput()?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'temp')->textInput() ?>
</div>
    <div class="form-group col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
