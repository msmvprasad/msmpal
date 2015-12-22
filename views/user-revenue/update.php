<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserRevenueDetails */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'User Revenue Details',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Revenue Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-revenue-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
