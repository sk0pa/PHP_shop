<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_row".
 *
 * @property integer $Id_Order_Row
 * @property integer $Id_Order
 * @property integer $Id_Goods
 * @property integer $Number
 * @property string $Price
 *
 * @property Goods $idGoods
 * @property Order $idOrder
 */
class OrderRowModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_row';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Order', 'Id_Goods', 'Number', 'Price'], 'required'],
            [['Id_Order', 'Id_Goods', 'Number'], 'integer'],
            [['Price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Order_Row' => 'Id  Order  Row',
            'Id_Order' => 'Id  Order',
            'Id_Goods' => 'Id  Goods',
            'Number' => 'Number',
            'Price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGoods()
    {
        return $this->hasOne(Goods::className(), ['Id_Goods' => 'Id_Goods']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrder()
    {
        return $this->hasOne(Order::className(), ['Id_Order' => 'Id_Order']);
    }
}
