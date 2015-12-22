<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiagnosticsDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnostics-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diagnostics_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnostics_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnostics_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
