<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Vehicle $model */
/** @var yii\widgets\ActiveForm $form */
$this->title = 'View Vehicle - '.$model->v_reg_id;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="vehicle-form well">  

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'v_reg_id')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'v_chassy_id')->textInput(['readOnly' => true]) ?>
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
                '1' => 'Petrol (Octane 92)', 
                '2' => 'Petrol (Octane 95)', 
                '3' => 'Super Diesel',
                '4' => 'Normal Diesel', 
                '5' => 'Kerosene'], 
                ['prompt' => 'Select Fuel Type']) ?>
        </div> 

        
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'no_of_cylinders')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'km_per_ltr')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'current_milage')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'engine_bored')->checkbox() ?>
        </div>
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
