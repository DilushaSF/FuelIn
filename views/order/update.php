<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Order $model */

$this->title = 'Update Order: ' . $model->ord_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ord_id, 'url' => ['view', 'ord_id' => $model->ord_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
