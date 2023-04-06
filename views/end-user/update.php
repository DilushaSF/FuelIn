<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EndUser $model */

$this->title = 'Update End User: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'End Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="end-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
