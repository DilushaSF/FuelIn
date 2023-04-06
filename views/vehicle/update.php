<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Vehicle $model */

$this->title = 'Update Vehicle: ' . $model->v_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->v_reg_id, 'url' => ['view', 'v_reg_id' => $model->v_reg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
