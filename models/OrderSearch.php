<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Order;

/**
 * OrderSearch represents the model behind the search form of `frontend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ord_id', 'filling_station_id'], 'integer'],
            [['ord_date'], 'safe'],
            [['octane_92', 'octane_95', 'super_diesel', 'normal_diesel', 'kerosene'], 'boolean'],
            [['octane_92_qty', 'octane_92_price', 'octane_92_totval', 'octane_95_qty', 'octane_95_price', 'octane_95_totval', 'total_value'], 'number'],
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
        $query = Order::find();

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
            'ord_id' => $this->ord_id,
            'filling_station_id' => $this->filling_station_id,
            'ord_date' => $this->ord_date,
            'octane_92' => $this->octane_92,
            'octane_92_qty' => $this->octane_92_qty,
            'octane_92_price' => $this->octane_92_price,
            'octane_92_totval' => $this->octane_92_totval,
            'octane_95' => $this->octane_95,
            'octane_95_qty' => $this->octane_95_qty,
            'octane_95_price' => $this->octane_95_price,
            'octane_95_totval' => $this->octane_95_totval,
            'total_value' => $this->total_value,
        ]);

        return $dataProvider;
    }
}
