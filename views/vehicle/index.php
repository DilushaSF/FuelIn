<?php

use frontend\models\Vehicle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\VehicleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => ActionColumn::className(),
                'contentOptions'=>[ 'style'=>'width: 68px'],
                'urlCreator' => function ($action, Vehicle $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'v_reg_id' => $model->v_reg_id]);
                 }
            ],

            // 'id',
            'v_reg_id',
            'v_chassy_id',  
            [
                'attribute' => 'vehicle_type_id',
                'value' => 'vtype0.description'
            ],

            'fuel_quota_token_no',
            // [
            //     'attribute' => 'fuel_type_id',
            //     'value' => 'fueltype0.description'
            // ],

            'no_of_cylinders',
            'km_per_ltr',
            'engine_bored:boolean',
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
