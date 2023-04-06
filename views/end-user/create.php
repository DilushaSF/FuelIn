<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EndUser $model */

$this->title = 'Create End User';
$this->params['breadcrumbs'][] = ['label' => 'End Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
