<?php

use frontend\models\FillingStation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\FillingStationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Filling Stations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filling-station-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Filling Station', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, FillingStation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'fs_id' => $model->fs_id]);
                 }
            ],

            'fs_id',
            'fs_name',
            'fs_brn',
            'contact_no',
            'email:email',
            // 'address',
            [
                'attribute' => 'district_id',
                'value' => 'district0.description'
            ],

            [
                'attribute' => 'province_id',
                'value' => 'district0.province0.description'
            ],

            //'district_id',
            //'province_id',
            //'fuel_type',
            //'created_date',
            //'last_modified',
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
