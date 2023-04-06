<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FillingStation $model */

$this->title = 'Update Filling Station: ' . $model->fs_id;
$this->params['breadcrumbs'][] = ['label' => 'Filling Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fs_id, 'url' => ['view', 'fs_id' => $model->fs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filling-station-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
