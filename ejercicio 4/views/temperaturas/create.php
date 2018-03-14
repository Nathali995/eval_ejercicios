<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Temperaturas */

$this->title = 'Create Temperaturas';
$this->params['breadcrumbs'][] = ['label' => 'Temperaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temperaturas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
