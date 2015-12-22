<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FinanceCompanyDetails;

/**
 * FinanceCompanySearch represents the model behind the search form about `app\models\FinanceCompanyDetails`.
 */
class FinanceCompanySearch extends FinanceCompanyDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'copy_status'], 'integer'],
            [['cmpy_name', 'cmpy_description', 'cmpy_location', 'cmpy_area'], 'safe'],
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
        $query = FinanceCompanyDetails::find();

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
            'copy_status' => $this->copy_status,
        ]);

        $query->andFilterWhere(['like', 'cmpy_name', $this->cmpy_name])
            ->andFilterWhere(['like', 'cmpy_description', $this->cmpy_description])
            ->andFilterWhere(['like', 'cmpy_location', $this->cmpy_location])
            ->andFilterWhere(['like', 'cmpy_area', $this->cmpy_area]);

        return $dataProvider;
    }
}
