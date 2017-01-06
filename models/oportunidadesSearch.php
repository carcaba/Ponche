<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\oportunidades;

/**
 * oportunidadesSearch represents the model behind the search form about `app\models\oportunidades`.
 */
class oportunidadesSearch extends oportunidades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['op_id'], 'integer'],
            [['fy', 'kam', 'group', 'branch', 'sales_channel', 'customer', 'short_desc', 'status', 'total_lic_revenue', 'total_readers_revenue', 'total_serv_revenue', 'total_opp_revenue', 'opp_date', 'exp_close_date', 'close_date'], 'safe'],
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
        $query = oportunidades::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'op_id' => $this->op_id,
        ]);

        $query->andFilterWhere(['like', 'fy', $this->fy])
            ->andFilterWhere(['like', 'kam', $this->kam])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'branch', $this->branch])
            ->andFilterWhere(['like', 'sales_channel', $this->sales_channel])
            ->andFilterWhere(['like', 'customer', $this->customer])
            ->andFilterWhere(['like', 'short_desc', $this->short_desc])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'total_lic_revenue', $this->total_lic_revenue])
            ->andFilterWhere(['like', 'total_readers_revenue', $this->total_readers_revenue])
            ->andFilterWhere(['like', 'total_serv_revenue', $this->total_serv_revenue])
            ->andFilterWhere(['like', 'total_opp_revenue', $this->total_opp_revenue])
            ->andFilterWhere(['like', 'opp_date', $this->opp_date])
            ->andFilterWhere(['like', 'exp_close_date', $this->exp_close_date])
            ->andFilterWhere(['like', 'close_date', $this->close_date])
            ->orderBy(['op_id' => SORT_DESC]);

        return $dataProvider;
    }
}
