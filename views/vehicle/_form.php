<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Vehicle $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="vehicle-form well">  

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'v_reg_id')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'v_chassy_id')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'vehicle_type_id')->dropDownList([
                '1' => 'Car', 
                '2' => 'Bike', 
                '3' => 'Van',
                '4' => 'Lorry',
                '5' => 'Container'], 
                ['prompt' => 'Select Vehicle Type']) ?>
        </div> 

        <div class="col-md-3">
            <?= $form->field($model, 'fuel_type_id')->dropDownList([
                '1' => 'Petrol', 
                '2' => 'Diesel', 
                '3' => 'HYBRID'], 
                ['prompt' => 'Select Fuel Type']) ?>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'no_of_cylinders')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'km_per_ltr')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'current_milage')->textInput() ?>
        </div>
        
        <div class="col-md-3">
            <?= $form->field($model, 'engine_bored')->checkbox() ?>
        </div>
    </div>


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
