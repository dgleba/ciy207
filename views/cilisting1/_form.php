<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cilisting1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cilisting1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ft')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planned_timing')->textInput() ?>

    <?= $form->field($model, 'revised_timing')->textInput() ?>

    <?= $form->field($model, 'estimated_cost')->textInput() ?>

    <?= $form->field($model, 'savings_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annual_savings_dollars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percent_complete')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'originator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'documents_complete')->dropDownList([ 'No' => 'No', 'Yes' => 'Yes', '.' => '.', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'one_time_savings')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hard_soft_savings')->dropDownList([ 'Hard' => 'Hard', 'Soft' => 'Soft', 'Hard/Soft' => 'Hard/Soft', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'soft_dollars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'il1_target_date')->textInput() ?>

    <?= $form->field($model, 'il2_target_date')->textInput() ?>

    <?= $form->field($model, 'il3_target_date')->textInput() ?>

    <?= $form->field($model, 'il4_target_date')->textInput() ?>

    <?= $form->field($model, 'il5_target_date')->textInput() ?>

    <?= $form->field($model, 'wc_idea_date')->textInput() ?>

    <?= $form->field($model, 'actual_implementation_date')->textInput() ?>

    <?= $form->field($model, 'enter_in_wc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatedtime')->textInput() ?>

    <?= $form->field($model, 'id_wc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'environmental')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ease_of_implementation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'submit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line_num')->textInput() ?>

    <?= $form->field($model, 'next_steps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suggestion_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ci_leader_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metric_impact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gift_4_suggestion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'il_current')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdtime')->textInput() ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkmore')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idea_Qtr_1')->textInput() ?>

    <?= $form->field($model, 'orginator_email')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
