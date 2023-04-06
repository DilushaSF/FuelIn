<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\FillingStation $model */

$this->title = 'Create Filling Station';
$this->params['breadcrumbs'][] = ['label' => 'Filling Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filling-station-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
