<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FinanceCompanyDetails */

$this->title = Yii::t('app', 'Create Finance Company Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Finance Company Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="finance-company-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
