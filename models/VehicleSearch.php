<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Vehicle;

/**
 * VehicleSearch represents the model behind the search form of `frontend\models\Vehicle`.
 */
class VehicleSearch extends Vehicle
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'v_chassy_id', 'fuel_type_id', 'fuel_quota_token_no'], 'integer'],
            [['v_reg_id', 'created_date', 'last_modified', 'no_of_cylinders', 'km_per_ltr', 'vehicle_type_id', 'engine_bored'], 'safe'],
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
        $query = Vehicle::find();

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
            'v_chassy_id' => $this->v_chassy_id,
            'fuel_type_id' => $this->fuel_type_id,
            'created_date' => $this->created_date,
            'last_modified' => $this->last_modified,
            'engine_bored' => $this->engine_bored,
        ]);

        $query->andFilterWhere(['ilike', 'v_reg_id', $this->v_reg_id]);

        return $dataProvider;
    }
}
