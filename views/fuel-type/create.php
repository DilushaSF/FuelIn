<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FuelType $model */

$this->title = 'Create Fuel Type';
$this->params['breadcrumbs'][] = ['label' => 'Fuel Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuel-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
