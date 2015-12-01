<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cilisting1".
 *
 * @property string $ft
 * @property string $project_number
 * @property string $project_description
 * @property string $owner
 * @property string $planned_timing
 * @property string $revised_timing
 * @property integer $estimated_cost
 * @property string $savings_category
 * @property string $annual_savings_dollars
 * @property string $percent_complete
 * @property string $comments
 * @property string $originator
 * @property string $team
 * @property string $documents_complete
 * @property string $one_time_savings
 * @property string $hard_soft_savings
 * @property string $soft_dollars
 * @property string $il1_target_date
 * @property string $il2_target_date
 * @property string $il3_target_date
 * @property string $il4_target_date
 * @property string $il5_target_date
 * @property string $wc_idea_date
 * @property string $actual_implementation_date
 * @property string $enter_in_wc
 * @property string $area
 * @property string $updatedtime
 * @property string $id_wc
 * @property string $environmental
 * @property string $ease_of_implementation
 * @property string $submit
 * @property integer $line_num
 * @property string $next_steps
 * @property string $suggestion_status
 * @property string $ci_leader_1
 * @property string $group
 * @property string $metric_impact
 * @property string $gift_4_suggestion
 * @property string $il_current
 * @property string $createdtime
 * @property string $link
 * @property string $linkmore
 * @property string $display
 * @property integer $idea_Qtr_1
 * @property string $orginator_email
 * @property integer $ciid
 * 
 */
class Cilisting1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cilisting1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_number', 'link', 'linkmore', 'display'], 'required'],
            [['planned_timing', 'revised_timing', 'il1_target_date', 'il2_target_date', 'il3_target_date', 'il4_target_date', 'il5_target_date', 'wc_idea_date', 'actual_implementation_date', 'updatedtime', 'createdtime'], 'safe'],
            [['estimated_cost', 'line_num', 'idea_Qtr_1'], 'integer'],
            [['comments', 'documents_complete', 'hard_soft_savings'], 'string'],
            [['ft'], 'string', 'max' => 22],
            [['project_number'], 'string', 'max' => 29],
            [['project_description'], 'string', 'max' => 500],
            [['owner'], 'string', 'max' => 200],
            [['savings_category'], 'string', 'max' => 211],
            [['annual_savings_dollars', 'soft_dollars'], 'string', 'max' => 20],
            [['percent_complete'], 'string', 'max' => 26],
            [['originator'], 'string', 'max' => 31],
            [['team'], 'string', 'max' => 600],
            [['one_time_savings'], 'string', 'max' => 45],
            [['enter_in_wc'], 'string', 'max' => 25],
            [['area', 'suggestion_status', 'group'], 'string', 'max' => 99],
            [['id_wc', 'submit', 'gift_4_suggestion'], 'string', 'max' => 10],
            [['environmental'], 'string', 'max' => 23],
            [['ease_of_implementation'], 'string', 'max' => 27],
            [['next_steps'], 'string', 'max' => 987],
            [['ci_leader_1'], 'string', 'max' => 119],
            [['metric_impact'], 'string', 'max' => 77],
            [['il_current'], 'string', 'max' => 1],
            [['link'], 'string', 'max' => 567],
            [['linkmore'], 'string', 'max' => 9999],
            [['display'], 'string', 'max' => 11],
            [['orginator_email'], 'string', 'max' => 233]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ft' => 'Ft',
            'project_number' => 'Project Number',
            'project_description' => 'Project Description',
            'owner' => 'Owner',
            'planned_timing' => 'Planned Timing',
            'revised_timing' => 'Revised Timing',
            'estimated_cost' => 'Estimated Cost',
            'savings_category' => 'Savings Category',
            'annual_savings_dollars' => 'Annual Savings Dollars',
            'percent_complete' => 'Percent Complete',
            'comments' => 'Comments',
            'originator' => 'Originator',
            'team' => 'Team',
            'documents_complete' => 'Documents Complete',
            'one_time_savings' => 'One Time Savings',
            'hard_soft_savings' => 'Hard Soft Savings',
            'soft_dollars' => 'Soft Dollars',
            'il1_target_date' => 'Il1 Target Date',
            'il2_target_date' => 'Il2 Target Date',
            'il3_target_date' => 'Il3 Target Date',
            'il4_target_date' => 'Il4 Target Date',
            'il5_target_date' => 'Il5 Target Date',
            'wc_idea_date' => 'Wc Idea Date',
            'actual_implementation_date' => 'Actual Implementation Date',
            'enter_in_wc' => 'Enter In Wc',
            'area' => 'Area',
            'updatedtime' => 'Updatedtime',
            'id_wc' => 'Id Wc',
            'environmental' => 'Environmental',
            'ease_of_implementation' => 'Ease Of Implementation',
            'submit' => 'Submit',
            'line_num' => 'Line Num',
            'next_steps' => 'Next Steps',
            'suggestion_status' => 'Suggestion Status',
            'ci_leader_1' => 'Ci Leader 1',
            'group' => 'Group',
            'metric_impact' => 'Metric Impact',
            'gift_4_suggestion' => 'Gift 4 Suggestion',
            'il_current' => 'Il Current',
            'createdtime' => 'Createdtime',
            'link' => 'Link',
            'linkmore' => 'Linkmore',
            'display' => 'Display',
            'idea_Qtr_1' => 'Idea  Qtr 1',
            'orginator_email' => 'Orginator Email',
            'ciid' => 'Ciid',
            //'z-updatedtime' => 'Z Updatedtime',
        ];
    }

    /**
     * @inheritdoc
     * @return Cilisting1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Cilisting1Query(get_called_class());
    }
}
