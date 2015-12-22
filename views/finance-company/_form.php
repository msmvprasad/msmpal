<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinanceCompanyDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="finance-company-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'cmpy_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cmpy_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmpy_location')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmpy_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'copy_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
