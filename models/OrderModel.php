<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $Id_Order
 * @property integer $Id_User
 * @property string $Date
 * @property integer $AllPrice
 *
 * @property User $idUser
 * @property OrderRow[] $orderRows
 */
class OrderModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_User', 'Date', 'AllPrice'], 'required'],
            [['Id_User', 'AllPrice'], 'integer'],
            [['Date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Order' => 'Id  Order',
            'Id_User' => 'Id  User',
            'Date' => 'Date',
            'AllPrice' => 'All Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['Id_User' => 'Id_User']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderRows()
    {
        return $this->hasMany(OrderRow::className(), ['Id_Order' => 'Id_Order']);
    }
}
