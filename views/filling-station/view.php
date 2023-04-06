<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\FillingStation $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'View Filling Sation - '.$model->fs_name;
$this->params['breadcrumbs'][] = ['label' => 'Filling Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="filling-station-form well">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'fs_name')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'fs_brn')->textInput(['readOnly' => true]) ?>
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
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'fuel_type')->dropDownList([
                '1' => 'IOC', 
                '2' => 'Ceypetco', 
                '3' => 'Euro 4'], 
                ['prompt' => 'Select Fuel Supplier']) ?>
        </div> 

        <div class="col-md-3">
            <?= $form->field($model, 'contact_no')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'email')->textInput(['readOnly' => true]) ?>
        </div>
 
        <div class="col-md-3">
            <?= $form->field($model, 'address')->textArea(['readOnly' => true]) ?>
        </div>
    </div>

    <br>
    

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