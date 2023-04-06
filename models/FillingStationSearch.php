<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FillingStation;

/**
 * FillingStationSearch represents the model behind the search form of `frontend\models\FillingStation`.
 */
class FillingStationSearch extends FillingStation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fs_id', 'district_id', 'province_id', 'fuel_type'], 'integer'],
            [['fs_name', 'fs_brn', 'contact_no', 'email', 'address', 'created_date', 'last_modified'], 'safe'],
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
        $query = FillingStation::find();

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
            'fs_id' => $this->fs_id,
            'district_id' => $this->district_id,
            'province_id' => $this->province_id,
            'fuel_type' => $this->fuel_type,
            'created_date' => $this->created_date,
            'last_modified' => $this->last_modified,
        ]);

        $query->andFilterWhere(['ilike', 'fs_name', $this->fs_name])
            ->andFilterWhere(['ilike', 'fs_brn', $this->fs_brn])
            ->andFilterWhere(['ilike', 'contact_no', $this->contact_no])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'address', $this->address]);

        return $dataProvider;
    }
}
