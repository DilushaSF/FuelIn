<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */ 
/** @var frontend\models\EndUser $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'View End-user - '.$model->name;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="end-user-form well">

    <?php $form = ActiveForm::begin(); ?> 

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'nic')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'contact_number')->textInput(['readOnly' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'email')->textInput(['readOnly' => true]) ?>
        </div>

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
                '10' => 'Ratnapura', 
                '11' => 'Ampara', 
                '12' => 'Trincomalee',  
                '13' => 'Polonnaruwa', 
                '14' => 'Puttalama', 
                '15' => 'Kegalle', 
                '16' => 'Batticaloa', ], 
                ['prompt' => 'Select District']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'address')->textArea(['readOnly' => true]) ?>
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