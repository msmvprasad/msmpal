<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinanceCompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="finance-company-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cmpy_name') ?>

    <?= $form->field($model, 'cmpy_description') ?>

    <?= $form->field($model, 'cmpy_location') ?>

    <?= $form->field($model, 'cmpy_area') ?>

    <?php // echo $form->field($model, 'copy_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
