<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserHealthRecords */

$this->title = Yii::t('app', 'Create User Health Records');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Health Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-health-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
