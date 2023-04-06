<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "end_user".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $nic
 * @property string|null $contact_number
 * @property string|null $email
 * @property string|null $address
 * @property int|null $district_id
 * @property int|null $province_id
 * @property string|null $password
 * @property string|null $created_date
 * @property string|null $last_modified
 */
class EndUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'end_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'province_id'], 'default', 'value' => null],
            [['district_id', 'province_id'], 'integer'],
            [['created_date', 'last_modified'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['nic'], 'string', 'max' => 25],
            [['contact_number'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nic' => 'NIC',
            'contact_number' => 'Contact Number',
            'email' => 'Email',
            'address' => 'Address',
            'district_id' => 'District',
            'province_id' => 'Province',
            'password' => 'Password',
            'created_date' => 'Created Date',
            'last_modified' => 'Last Modified',
        ];
    }

    public function getDistrict0()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }
}
