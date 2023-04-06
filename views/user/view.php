<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\User $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'View User - '.$model->username;

?>


<h1><?= Html::encode($this->title) ?></h1>

<div class="user-form well">

    <?php $form = ActiveForm::begin(); ?>
 
    <div class="row"> 
        <div class="col-md-3">
            <?= $form->field($model, 'username')->textInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'password')->passwordInput(['readOnly' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'email')->textInput(['readOnly' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'user_type_id')->dropDownList([
                '1' => 'Admin', 
                '2' => 'Customer', 
                '3' => 'End User'], 
                ['prompt' => 'Select User Type']) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'created_date')->passwordInput(['readonly' => true]) ?>
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
