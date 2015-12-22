<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiagnosticsDetails */

$this->title = Yii::t('app', 'Create Diagnostics Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnostics Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnostics-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
