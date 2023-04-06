<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?> 

<div class="order-form well"> 

    <?php $form = ActiveForm::begin(); ?>

    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'filling_station_id')->dropDownList([
                '1' => 'Bandrawatta', 
                '2' => 'Kandana', 
                '3' => 'Nittambuwa'], 
                ['prompt' => 'Select Filling Station']) ?>
        </div>

        <div class="col-md-2">
            <?= $form->field($model, 'ord_date')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'supplier')->dropDownList([
                '1' => 'IOC', 
                '2' => 'Ceypetco', 
                '3' => 'Euro 4'], 
                ['prompt' => 'Select Fuel Supplier']) ?>
        </div> 

        <div class="col-md-2">
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

        <div class="col-md-2">
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

    <span> <h3 style="text-align: center;"> Fuel Type Details </h3> </span>
    <br>


    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'octane_92')->checkbox() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_92_qty')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_92_price')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_92_totval')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'octane_95')->checkbox() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_95_qty')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_95_price')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'octane_95_totval')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'super_diesel')->checkbox() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'super_diesel_qty')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'super_diesel_price')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'super_diesel_totval')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'normal_diesel')->checkbox() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'normal_diesel_qty')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'normal_diesel_price')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'normal_diesel_totval')->textInput() ?>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'kerosene')->checkbox() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'kerosene_qty')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'kerosene_price')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'kerosene_totval')->textInput() ?>
        </div>
    </div>
    <br>

    <div class="row"> 
        <div class="col-md-2">
            <?= $form->field($model, 'total_value')->textInput() ?>
        </div>
    </div>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Save Order', [
            'class' => $model->isNewRecord ? 'btn btn-block btn-success' : 'btn btn-block btn-primary',
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