<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Customer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-form well">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'nic')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'address')->textArea(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'province_id')->dropDownList([
                '1' => 'Southern', 
                '2' => 'Western', 
                '3' => 'Northern', 
                '4' => 'Sabaragamuwa', 
                '5' => 'Central', 
                '6' => 'North Central', 
                '7' => 'Uva', 
                '8' => 'North Western', 
                '9' => 'Eastern'], 
                ['prompt' => 'Select Province']) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'district_id')->dropDownList([
                '1' => 'Gampaha', 
                '2' => 'Kalutara', 
                '3' => 'Colombo', 
                '4' => 'Monaragala', 
                '5' => 'Kurunegala', 
                '6' => 'Matale', 
                '7' => 'Nuwara eliya', 
                '8' => 'Jaffna', 
                '9' => 'Kilinochchiya',
                '10' => 'Batticaloa', 
                '11' => 'Ampara', 
                '12' => 'Trincomalee', 
                '13' => 'Kurunegala', 
                '14' => 'Puttalama', 
                '15' => 'Kegalle', 
                '16' => 'Ratnapura', ], 
                ['prompt' => 'Select District']) ?>
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
