<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cilisting1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cilisting1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ft') ?>

    <?= $form->field($model, 'project_number') ?>

    <?= $form->field($model, 'project_description') ?>

    <?= $form->field($model, 'owner') ?>

    <?= $form->field($model, 'planned_timing') ?>

    <?php // echo $form->field($model, 'revised_timing') ?>

    <?php // echo $form->field($model, 'estimated_cost') ?>

    <?php // echo $form->field($model, 'savings_category') ?>

    <?php // echo $form->field($model, 'annual_savings_dollars') ?>

    <?php // echo $form->field($model, 'percent_complete') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'originator') ?>

    <?php // echo $form->field($model, 'team') ?>

    <?php // echo $form->field($model, 'documents_complete') ?>

    <?php // echo $form->field($model, 'one_time_savings') ?>

    <?php // echo $form->field($model, 'hard_soft_savings') ?>

    <?php // echo $form->field($model, 'soft_dollars') ?>

    <?php // echo $form->field($model, 'il1_target_date') ?>

    <?php // echo $form->field($model, 'il2_target_date') ?>

    <?php // echo $form->field($model, 'il3_target_date') ?>

    <?php // echo $form->field($model, 'il4_target_date') ?>

    <?php // echo $form->field($model, 'il5_target_date') ?>

    <?php // echo $form->field($model, 'wc_idea_date') ?>

    <?php // echo $form->field($model, 'actual_implementation_date') ?>

    <?php // echo $form->field($model, 'enter_in_wc') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'updatedtime') ?>

    <?php // echo $form->field($model, 'id_wc') ?>

    <?php // echo $form->field($model, 'environmental') ?>

    <?php // echo $form->field($model, 'ease_of_implementation') ?>

    <?php // echo $form->field($model, 'submit') ?>

    <?php // echo $form->field($model, 'line_num') ?>

    <?php // echo $form->field($model, 'next_steps') ?>

    <?php // echo $form->field($model, 'suggestion_status') ?>

    <?php // echo $form->field($model, 'ci_leader_1') ?>

    <?php // echo $form->field($model, 'group') ?>

    <?php // echo $form->field($model, 'metric_impact') ?>

    <?php // echo $form->field($model, 'gift_4_suggestion') ?>

    <?php // echo $form->field($model, 'il_current') ?>

    <?php // echo $form->field($model, 'createdtime') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'linkmore') ?>

    <?php // echo $form->field($model, 'display') ?>

    <?php // echo $form->field($model, 'idea_Qtr_1') ?>

    <?php // echo $form->field($model, 'orginator_email') ?>

    <?php // echo $form->field($model, 'ciid') ?>

    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
