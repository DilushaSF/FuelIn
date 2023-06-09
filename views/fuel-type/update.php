<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FuelType $model */

$this->title = 'Update Fuel Type: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fuel Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fuel-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
