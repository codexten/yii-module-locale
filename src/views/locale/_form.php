<?php

use codexten\yii\modules\locale\models\Locale;
use kartik\select2\Select2;
use Symfony\Component\Intl\Locales;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model Locale */
?>

<div class="row">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'code')
            ->widget(Select2::class, [
                'data' => Locales::getNames(),
                'language' => 'de',
                'options' => ['placeholder' => Yii::t('codexten:module:locale', 'Select locale')],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:locale', 'Create') : Yii::t('codexten:module:locale',
                    'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>