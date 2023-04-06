<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\FillingStation $model */

$this->title = $model->fs_id;
$this->params['breadcrumbs'][] = ['label' => 'Filling Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="filling-station-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'fs_id' => $model->fs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'fs_id' => $model->fs_id], [
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
            'fs_id',
            'fs_name',
            'fs_brn',
            'contact_no',
            'email:email',
            'address',
            'district_id',
            'province_id',
            'fuel_type',
            'created_date',
            'last_modified',
        ],
    ]) ?>

</div>
