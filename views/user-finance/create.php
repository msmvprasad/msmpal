<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserFinanceDetails */

$this->title = Yii::t('app', 'Create User Finance Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Finance Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-finance-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
