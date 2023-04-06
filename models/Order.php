<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $ord_id
 * @property int|null $filling_station_id
 * @property string|null $ord_date
 * @property bool|null $octane_92
 * @property float|null $octane_92_qty
 * @property float|null $octane_92_price
 * @property float|null $octane_92_totval
 * @property bool|null $octane_95
 * @property float|null $octane_95_qty
 * @property float|null $octane_95_price
 * @property float|null $octane_95_totval
 * @property float|null $total_value
 *
 * @property FillingStation $fillingStation
 */
class Order extends \yii\db\ActiveRecord
{
    public $province;
    public $supplier;
    public $district;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filling_station_id'], 'default', 'value' => null],
            [['filling_station_id', 'province_id', 'district_id'], 'integer'],
            [['ord_date','supplier'], 'safe'],
            [['octane_92', 'octane_95', 'super_diesel', 'normal_diesel', 'kerosene'], 'boolean'],
            [['octane_92_qty', 'octane_92_price', 'octane_92_totval', 'octane_95_qty', 'octane_95_price', 'octane_95_totval', 'total_value', 'super_diesel_qty', 'super_diesel_price', 'super_diesel_totval', 'normal_diesel_qty', 'normal_diesel_price', 'normal_diesel_totval', 'kerosene', 'kerosene_qty', 'kerosene_price', 'kerosene_totval'], 'number'],
            [['filling_station_id'], 'exist', 'skipOnError' => true, 'targetClass' => FillingStation::class, 'targetAttribute' => ['filling_station_id' => 'fs_id']],
        ];
    }

    /**
     * {@inheritdoc} 
     */
    public function attributeLabels()
    {
        return [
            'ord_id' => 'Order ID',
            'filling_station_id' => 'Filling Station',
            'ord_date' => 'Order Date',
            'octane_92' => 'Octane 92',
            'octane_92_qty' => 'Qty',
            'octane_92_price' => 'Price',
            'octane_92_totval' => 'Value',
            'octane_95' => 'Octane 95',
            'octane_95_qty' => 'Qty',
            'octane_95_price' => 'Price',
            'octane_95_totval' => 'Value',
            'total_value' => 'Total Value',
            'super_diesel' => 'Super Diesel',
            'super_diesel_qty' => 'Qty',
            'super_diesel_price' => 'Price',
            'super_diesel_totval' => 'Value',
            'normal_diesel' => 'Normal Diesel',
            'normal_diesel_qty' => 'Qty',
            'normal_diesel_price' => 'Price',
            'normal_diesel_totval' => 'Value',
            'kerosene' => 'Normal Diesel',
            'kerosene_qty' => 'Qty',
            'kerosene_price' => 'Price',
            'kerosene_totval' => 'Value',
            'province_id' => 'Province',
            'district_id' => 'District'
        ];
    }

    /**
     * Gets query for [[FillingStation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFillingStation()
    {
        return $this->hasOne(FillingStation::class, ['fs_id' => 'filling_station_id']);
    }
}
