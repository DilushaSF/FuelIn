<?php

namespace frontend\models;

use Yii;
use frontend\models\District;
/**
 * This is the model class for table "filling_station".
 *
 * @property int $fs_id
 * @property string|null $fs_name
 * @property string|null $fs_brn
 * @property string|null $contact_no
 * @property string|null $email
 * @property string|null $address
 * @property int|null $district_id
 * @property int|null $province_id
 * @property int|null $fuel_type
 * @property string|null $created_date
 * @property string|null $last_modified
 *
 * @property Order[] $orders
 */
class FillingStation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filling_station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'province_id', 'fuel_type'], 'default', 'value' => null],
            [['district_id', 'province_id', 'fuel_type'], 'integer'],
            [['created_date', 'last_modified'], 'safe'],
            [['fs_name', 'fs_brn', 'email'], 'string', 'max' => 100],
            [['contact_no'], 'string', 'max' => 15],
            [['address'], 'string', 'max' => 150],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fs_id' => 'Fs ID',
            'fs_name' => 'Filling Station Name',
            'fs_brn' => 'Business Reg.No',
            'contact_no' => 'Contact No',
            'email' => 'Email',
            'address' => 'Address',
            'district_id' => 'District',
            'province_id' => 'Province',
            'fuel_type' => 'Fuel Supplier',
            'created_date' => 'Created Date',
            'last_modified' => 'Last Modified',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['filling_station_id' => 'fs_id']);
    }


    public function getDistrict0()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    
}
