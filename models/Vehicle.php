<?php

namespace frontend\models;

use Yii;
use frontend\models\VehicleType;
use frontend\models\FuelType;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $v_reg_id
 * @property int|null $v_chassy_id
 * @property int|null $fuel_type_id
 * @property string|null $created_date
 * @property string|null $last_modified
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle';
    } 

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['v_reg_id'], 'required'],
            [['fuel_type_id'], 'default', 'value' => null],
            [['fuel_type_id', 'no_of_cylinders', 'km_per_ltr', 'current_milage', 'vehicle_type_id', 'fuel_quota_token_no'], 'integer'],
            [['created_date', 'last_modified'], 'safe'],
            [['engine_bored'], 'boolean'],
            [['v_reg_id'], 'string', 'max' => 10],
            [['v_chassy_id'], 'string', 'max' => 60],
            [['v_reg_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'v_reg_id' => 'Vehicle Registration No',
            'v_chassy_id' => 'Chassy No',
            'fuel_type_id' => 'Fuel Type ID',
            'created_date' => 'Created Date',
            'last_modified' => 'Last Modified',
            'current_milage' => 'Current Milage (Km)',
            'vehicle_type_id' => 'Vehicle Type'
        ];
    }


    public function getVtype0()
    {
        return $this->hasOne(VehicleType::className(), ['id' => 'vehicle_type_id']);
    }

    public function getFueltype0()
    {
        return $this->hasOne(FuelType::className(), ['id' => 'fuel_type_id']);
    }
}
