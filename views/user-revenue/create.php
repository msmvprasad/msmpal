<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserRevenueDetails */

$this->title = Yii::t('app', 'Create User Revenue Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Revenue Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-revenue-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
