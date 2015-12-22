<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HealthRecords */

$this->title = Yii::t('app', 'Create Health Records');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Health Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
