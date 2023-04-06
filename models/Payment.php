<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $pay_id
 * @property float|null $amount
 * @property float|null $advance_amount
 * @property float|null $balance_amount
 * @property string|null $created_date
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'advance_amount', 'balance_amount'], 'number'],
            [['created_date'], 'safe'],
            [['order_id'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => 'Pay ID',
            'amount' => 'Amount',
            'advance_amount' => 'Advance Amount',
            'balance_amount' => 'Balance Amount',
            'created_date' => 'Date',
        ];
    }
}
