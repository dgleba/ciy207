<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Cilisting1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cilisting1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cilisting1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cilisting1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        [
	'class' => 'yii\grid\ActionColumn',
	//'header'=>'Actn', 
	//'headerOptions' => ['width' => '30'],
	'template' => '{view} {link}',
        ],
            ['class' => 'yii\grid\SerialColumn'],
            
            //'ft',
             'ciid',
            'project_number',
            'project_description',
            'owner',
             'suggestion_status',
            //'planned_timing',
            // 'revised_timing',
            // 'estimated_cost',
            // 'savings_category',
            // 'percent_complete',
             //'comments:ntext',
            
            [
            'attribute' => 'comments',
             'label'=>'Comments____________________________',
             'format' => ['ntext'],
             //'format' =>  ['date', 'php:Y-m-d H:i:s'],
             //'options' => ['width' => '1200em'],
             'contentOptions'=>['style'=>'max-width: 900px;'],
             'contentOptions'=>['style'=>'width: 800px;']
                //'options'=>array('width'=>'40px'),
            ],
             'originator',
             'team',
            // 'documents_complete',
            // 'one_time_savings',
            // 'hard_soft_savings',
            // 'soft_dollars',
            // 'il1_target_date',
            // 'il2_target_date',
            // 'il3_target_date',
            // 'il4_target_date',
            // 'il5_target_date',
            'wc_idea_date',
            //'actual_implementation_date',
            [
            'attribute' => 'actual_implementation_date',
             'label'=>'Act Impl Date',
            ],
             'annual_savings_dollars',
            // 'enter_in_wc',
            // 'area',
            // 'updatedtime',
            // 'id_wc',
            // 'environmental',
            // 'ease_of_implementation',
            // 'submit',
            // 'line_num',
            // 'next_steps',
            // 'ci_leader_1',
            // 'group',
            // 'metric_impact',
             'gift_4_suggestion',
             'il_current',
             'createdtime',
            // 'link',
             'linkmore',
             'display',
            // 'idea_Qtr_1',
            // 'orginator_email:email',
            // 'z-updatedtime',

        ],
    ]); ?>

</div>
