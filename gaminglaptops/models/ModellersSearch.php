<?php

namespace vendor\mmyildizs\gaminglaptops\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\mmyildizs\gaminglaptops\models\Modellers;

/**
 * ModellersSearch represents the model behind the search form of `vendor\mmyildizs\gaminglaptops\models\Modellers`.
 */
class ModellersSearch extends Modellers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'RAM_GB', 'SSD_GB', 'Fiyat_TL'], 'integer'],
            [['MarkaAdi', 'ModelAdi', 'GPU', 'CPU'], 'safe'],
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
        $query = Modellers::find();

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
            'RAM_GB' => $this->RAM_GB,
            'SSD_GB' => $this->SSD_GB,
            'Fiyat_TL' => $this->Fiyat_TL,
        ]);

        $query->andFilterWhere(['like', 'MarkaAdi', $this->MarkaAdi])
            ->andFilterWhere(['like', 'ModelAdi', $this->ModelAdi])
            ->andFilterWhere(['like', 'GPU', $this->GPU])
            ->andFilterWhere(['like', 'CPU', $this->CPU]);

        return $dataProvider;
    }
}
