<?php

namespace vendor\mmyildizs\gaminglaptops\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\mmyildizs\gaminglaptops\models\Markalars;

/**
 * MarkalarsSearch represents the model behind the search form of `vendor\mmyildizs\gaminglaptops\models\Markalars`.
 */
class MarkalarsSearch extends Markalars
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'modeladedi'], 'integer'],
            [['markadi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Markalars::find();

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
            'id' => $this->id,
            'modeladedi' => $this->modeladedi,
        ]);

        $query->andFilterWhere(['like', 'markadi', $this->markadi]);

        return $dataProvider;
    }
}
