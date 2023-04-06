<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Payment $model */
/** @var yii\widgets\ActiveForm $form */
?> 

<div class="payment-form well">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'order_id')->dropDownList([
                '1' => '1', 
                '2' => '2', 
                '3' => '3',
                '4' => '4',
                '5' => '5'], 
                ['prompt' => 'Select Order No']) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'created_date')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'amount')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'advance_amount')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'balance_amount')->textInput() ?>
        </div>
    </div>

    <br>    

    <div class="form-group">
        <?= Html::submitButton('Save', [
            'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
            'data' => ['confirm' => 'Are you sure want to Save?']
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 

$this->registerCss("

    .well {
        border: 1px solid black !important;

    }


    
    h1 {
        font-weight: bold !important;
        text-transform: uppercase !important;
    }



") ?>
