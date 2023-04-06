<?php

use frontend\models\EndUser;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\EndUserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'End Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create End User', ['create'], ['class' => 'btn btn-success']) ?>
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
                'contentOptions'=>[ 'style'=>'width: 70px'],
                'urlCreator' => function ($action, EndUser $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],

            'id',
            'name',
            'nic',
            [
                'attribute' => 'district_id',
                'value' => 'district0.description'
            ],

            [
                'attribute' => 'province_id',
                'value' => 'district0.province0.description'
            ],
            'contact_number',
            'email:email',
            //'address',
            //'district_id',
            //'province_id',
            //'password',
            //'created_date',
            //'last_modified',
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
