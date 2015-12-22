<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HealthRecords;

/**
 * HealthRecordsSearch represents the model behind the search form about `app\models\HealthRecords`.
 */
class HealthRecordsSearch extends HealthRecords
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'record_status'], 'integer'],
            [['record_description', 'record_name', 'created_date'], 'safe'],
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
        $query = HealthRecords::find();

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
            'record_status' => $this->record_status,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'record_description', $this->record_description])
            ->andFilterWhere(['like', 'record_name', $this->record_name]);

        return $dataProvider;
    }
}
