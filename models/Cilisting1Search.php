<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cilisting1;

/**
 * Cilisting1Search represents the model behind the search form about `app\models\Cilisting1`.
 */
class Cilisting1Search extends Cilisting1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ft', 'project_number', 'project_description', 'owner', 'planned_timing', 'revised_timing', 'savings_category', 'annual_savings_dollars', 'percent_complete', 'comments', 'originator', 'team', 'documents_complete', 'one_time_savings', 'hard_soft_savings', 'soft_dollars', 'il1_target_date', 'il2_target_date', 'il3_target_date', 'il4_target_date', 'il5_target_date', 'wc_idea_date', 'actual_implementation_date', 'enter_in_wc', 'area', 'updatedtime', 'id_wc', 'environmental', 'ease_of_implementation', 'submit', 'next_steps', 'suggestion_status', 'ci_leader_1', 'group', 'metric_impact', 'gift_4_suggestion', 'il_current', 'createdtime', 'link', 'linkmore', 'display', 'orginator_email', 'z-updatedtime'], 'safe'],
            [['estimated_cost', 'line_num', 'idea_Qtr_1', 'ciid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cilisting1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'planned_timing' => $this->planned_timing,
            'revised_timing' => $this->revised_timing,
            'estimated_cost' => $this->estimated_cost,
            'il1_target_date' => $this->il1_target_date,
            'il2_target_date' => $this->il2_target_date,
            'il3_target_date' => $this->il3_target_date,
            'il4_target_date' => $this->il4_target_date,
            'il5_target_date' => $this->il5_target_date,
            'wc_idea_date' => $this->wc_idea_date,
            'actual_implementation_date' => $this->actual_implementation_date,
            'updatedtime' => $this->updatedtime,
            'line_num' => $this->line_num,
            'createdtime' => $this->createdtime,
            'idea_Qtr_1' => $this->idea_Qtr_1,
            'ciid' => $this->ciid,
            //'z-updatedtime' => $this->z-updatedtime,
        ]);

        $query->andFilterWhere(['like', 'ft', $this->ft])
            ->andFilterWhere(['like', 'project_number', $this->project_number])
            ->andFilterWhere(['like', 'project_description', $this->project_description])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'savings_category', $this->savings_category])
            ->andFilterWhere(['like', 'annual_savings_dollars', $this->annual_savings_dollars])
            ->andFilterWhere(['like', 'percent_complete', $this->percent_complete])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'originator', $this->originator])
            ->andFilterWhere(['like', 'team', $this->team])
            ->andFilterWhere(['like', 'documents_complete', $this->documents_complete])
            ->andFilterWhere(['like', 'one_time_savings', $this->one_time_savings])
            ->andFilterWhere(['like', 'hard_soft_savings', $this->hard_soft_savings])
            ->andFilterWhere(['like', 'soft_dollars', $this->soft_dollars])
            ->andFilterWhere(['like', 'enter_in_wc', $this->enter_in_wc])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'id_wc', $this->id_wc])
            ->andFilterWhere(['like', 'environmental', $this->environmental])
            ->andFilterWhere(['like', 'ease_of_implementation', $this->ease_of_implementation])
            ->andFilterWhere(['like', 'submit', $this->submit])
            ->andFilterWhere(['like', 'next_steps', $this->next_steps])
            ->andFilterWhere(['like', 'suggestion_status', $this->suggestion_status])
            ->andFilterWhere(['like', 'ci_leader_1', $this->ci_leader_1])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'metric_impact', $this->metric_impact])
            ->andFilterWhere(['like', 'gift_4_suggestion', $this->gift_4_suggestion])
            ->andFilterWhere(['like', 'il_current', $this->il_current])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'linkmore', $this->linkmore])
            ->andFilterWhere(['like', 'display', $this->display])
            ->andFilterWhere(['like', 'orginator_email', $this->orginator_email]);

        return $dataProvider;
    }
}
