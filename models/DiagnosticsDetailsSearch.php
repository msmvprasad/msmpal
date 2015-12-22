<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DiagnosticsDetails;

/**
 * DiagnosticsDetailsSearch represents the model behind the search form about `app\models\DiagnosticsDetails`.
 */
class DiagnosticsDetailsSearch extends DiagnosticsDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['diagnostics_name', 'diagnostics_description', 'diagnostics_type', 'created_date'], 'safe'],
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
        $query = DiagnosticsDetails::find();

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
            'id' => $this->id,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'diagnostics_name', $this->diagnostics_name])
            ->andFilterWhere(['like', 'diagnostics_description', $this->diagnostics_description])
            ->andFilterWhere(['like', 'diagnostics_type', $this->diagnostics_type]);

        return $dataProvider;
    }
}
