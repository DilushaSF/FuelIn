<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\OrderSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ord_id') ?>

    <?= $form->field($model, 'filling_station_id') ?>

    <?= $form->field($model, 'ord_date') ?>

    <?= $form->field($model, 'octane_92')->checkbox() ?>

    <?= $form->field($model, 'octane_92_qty') ?>

    <?php // echo $form->field($model, 'octane_92_price') ?>

    <?php // echo $form->field($model, 'octane_92_totval') ?>

    <?php // echo $form->field($model, 'octane_95')->checkbox() ?>

    <?php // echo $form->field($model, 'octane_95_qty') ?>

    <?php // echo $form->field($model, 'octane_95_price') ?>

    <?php // echo $form->field($model, 'octane_95_totval') ?>

    <?php // echo $form->field($model, 'total_value') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
