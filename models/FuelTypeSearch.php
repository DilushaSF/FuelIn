<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FuelType;

/**
 * FuelTypeSearch represents the model behind the search form of `frontend\models\FuelType`.
 */
class FuelTypeSearch extends FuelType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fuel_name', 'created_date', 'date_last_modified'], 'safe'],
            [['price_per_litre'], 'number'],
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
        $query = FuelType::find();

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
            'price_per_litre' => $this->price_per_litre,
            'created_date' => $this->created_date,
            'date_last_modified' => $this->date_last_modified,
        ]);

        $query->andFilterWhere(['ilike', 'fuel_name', $this->fuel_name]);

        return $dataProvider;
    }
}
