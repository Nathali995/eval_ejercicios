<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Temperaturas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Temperaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$list=[['cod' =>'01','nombre' => 'Azuay'], ['cod' =>'02', 'nombre'=> 'Bolivar'], ['cod' =>'03','nombre' => 'Cañar'], 
['cod' =>'04','nombre' => 'Carchi'], ['cod' =>'05','nombre' => 'Cotopaxi'], ['cod' =>'06','nombre' => 'Chimborazo'], 
['cod' =>'07','nombre' => 'El Oro'], ['cod' =>'08','nombre' => 'Esmeraldas'], ['cod' =>'09','nombre' => 'Guayas'], 
['cod' =>'10','nombre' => 'Imbabura'], ['cod' =>'11','nombre' => 'Loja'], ['cod' =>'12','nombre' => 'Los Rios'], 
['cod' =>'13','nombre' => 'Manabí']
/*, '14' => '14| Morona Santiago', '15' => '15| Napo', '16' => '16| Pastaza', '17' => '17| Pichincha', '18' => '18| Tungurahua', '19' => '19| Zamora Chinchipe', '20' => '20| Galápagos', '21' => '21| Sucumbios', '22' => '22| Orellana', '23' => '23| Sto. Domingo de los Tsachilas', '24' => '24| Santa Elena'*/
];

?>
<div class="temperaturas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="col-md-6">
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="col-md-6" id="graf">
        <p class="col-md-2" ><strong><?=$model->temp ?> °C</strong><br>
            <?= $model->cod ?>
        </p>
        <div class="col-md-3" style="margin-bottom:10px;">
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
            <div class="vbar"></div>
        </div>
    </div>
<br>
<div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cod',
            'fecha',
            'temp',
        ],
    ]) ?>
</div>
</div>
