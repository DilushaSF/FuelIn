<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fuel_type".
 *
 * @property int $id
 * @property string|null $fuel_name
 * @property float|null $price_per_litre
 * @property string|null $created_date
 * @property string|null $date_last_modified
 */
class FuelType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fuel_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price_per_litre'], 'number'],
            [['created_date', 'date_last_modified'], 'safe'],
            [['fuel_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fuel_name' => 'Fuel Name',
            'price_per_litre' => 'Price Per Litre',
            'created_date' => 'Created Date',
            'date_last_modified' => 'Date Last Modified',
        ];
    }
}
