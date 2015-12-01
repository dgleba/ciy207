<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cilisting1 */

$this->title = $model->ciid;
$this->params['breadcrumbs'][] = ['label' => 'Cilisting1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cilisting1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ciid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ciid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ft',
            'project_number',
            'project_description',
            'owner',
            'planned_timing',
            'revised_timing',
            'estimated_cost',
            'savings_category',
            'annual_savings_dollars',
            'percent_complete',
            'comments:ntext',
            'originator',
            'team',
            'documents_complete',
            'one_time_savings',
            'hard_soft_savings',
            'soft_dollars',
            'il1_target_date',
            'il2_target_date',
            'il3_target_date',
            'il4_target_date',
            'il5_target_date',
            'wc_idea_date',
            'actual_implementation_date',
            'enter_in_wc',
            'area',
            'updatedtime',
            'id_wc',
            'environmental',
            'ease_of_implementation',
            'submit',
            'line_num',
            'next_steps',
            'suggestion_status',
            'ci_leader_1',
            'group',
            'metric_impact',
            'gift_4_suggestion',
            'il_current',
            'createdtime',
            'link',
            'linkmore',
            'display',
            'idea_Qtr_1',
            'orginator_email:email',
            'ciid',
            //'z-updatedtime',
        ],
    ]) ?>

</div>
