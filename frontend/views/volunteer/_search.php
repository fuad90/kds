<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VolunteerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

     <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'nama',['class'=>'form-control']); ?>
                        <label for="form_control_1"><?= Html::activeLabel($model,'nama'); ?></label>
                        <span class="help-block"><?= Html::error($model,'nama'); ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'no_kp',['class'=>'form-control']); ?>
                        <label for="form_control_1"><?= Html::activeLabel($model,'no_kp'); ?></label>
                        <span class="help-block"><?= Html::error($model,'no_kp'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="form-group">
        <?= Html::submitButton('Carian', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
