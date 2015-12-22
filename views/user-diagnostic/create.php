<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserDiagnosticDetails */

$this->title = Yii::t('app', 'Create User Diagnostic Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Diagnostic Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-diagnostic-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
