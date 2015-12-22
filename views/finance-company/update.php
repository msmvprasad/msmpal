<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FinanceCompanyDetails */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Finance Company Details',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Finance Company Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="finance-company-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
