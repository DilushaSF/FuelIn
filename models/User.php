<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int|null $user_type_id
 * @property string|null $password
 * @property string|null $created_date
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type_id'], 'default', 'value' => null],
            [['user_type_id'], 'integer'],
            [['created_date'], 'safe'],
            [['password'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 30],
            [['username'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_type_id' => 'User Type',
            'password' => 'Password',
            'created_date' => 'Created Date',
        ];
    }
}
