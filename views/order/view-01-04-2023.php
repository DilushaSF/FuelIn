<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Order $model */

$this->title = $model->ord_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ord_id' => $model->ord_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ord_id' => $model->ord_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ord_id',
            'filling_station_id',
            'ord_date',
            'octane_92:boolean',
            'octane_92_qty',
            'octane_92_price',
            'octane_92_totval',
            'octane_95:boolean',
            'octane_95_qty',
            'octane_95_price',
            'octane_95_totval',
            'total_value',
        ],
    ]) ?>

</div>
