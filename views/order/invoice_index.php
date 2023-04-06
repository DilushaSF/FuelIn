<?php

use frontend\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\OrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Invoices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ord_id' => $model->ord_id]);
                 }
            ],

            // [
            //     'class' => 'yii\grid\ActionColumn',
            //     'contentOptions' => [],
            //     'header'=>'Actions',
            //     'template' => '{invoice}',
            //     'buttons' => [
            //         'print' => function ($url, $model) {
            //             return Html::a(
            //                 '<span class="glyphicon glyphicon-print btn"></span>',
            //                 ['/cus-com-invh/print', 'code' => $model->id], 
            //                 [
            //                     'title' => 'Print Commercial Invoice',
            //                     'data-pjax' => '0',
            //                     'target' => '_blank'
            //                 ]
            //             );
            //         }, 
            //     ],
            // ],

            'ord_id',
            // 'filling_station_id',
            [
                'attribute' => 'filling_station_id',
                'value' => 'fillingStation.fs_name'
            ],
            'ord_date',
            'octane_92:boolean',
            // 'octane_92_qty',
            //'octane_92_price',
            //'octane_92_totval',
            'octane_95:boolean',
            'super_diesel:boolean',
            'normal_diesel:boolean',
            'kerosene:boolean',
            //'octane_95_qty',
            //'octane_95_price',
            //'octane_95_totval',
            'total_value',
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
