<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property int $id
 * @property string|null $description
 * @property int|null $province_id
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_id'], 'default', 'value' => null],
            [['province_id'], 'integer'],
            [['description'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'province_id' => 'Province ID',
        ];
    }

    public function getProvince0()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }
}
