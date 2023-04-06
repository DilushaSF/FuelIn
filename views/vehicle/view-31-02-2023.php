<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Vehicle $model */

$this->title = $model->v_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'v_reg_id' => $model->v_reg_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'v_reg_id' => $model->v_reg_id], [
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
            'id',
            'v_reg_id',
            'v_chassy_id',
            'fuel_type_id',
            'created_date',
            'last_modified',
        ],
    ]) ?>

</div>
