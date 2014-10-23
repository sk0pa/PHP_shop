<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $Id_Goods
 * @property string $Producer
 * @property string $Model
 * @property string $Type
 * @property string $Kind
 * @property string $Price
 *
 * @property BucketRow[] $bucketRows
 * @property Comment[] $comments
 * @property OrderRow[] $orderRows
 */
class GoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Producer', 'Model', 'Type', 'Kind', 'Price'], 'required'],
            [['Price'], 'number'],
            [['Producer', 'Model', 'Type', 'Kind'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Goods' => 'Id  Goods',
            'Producer' => 'Producer',
            'Model' => 'Model',
            'Type' => 'Type',
            'Kind' => 'Kind',
            'Price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBucketRows()
    {
        return $this->hasMany(BucketRow::className(), ['Id_Goods' => 'Id_Goods']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['Id_Goods' => 'Id_Goods']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderRows()
    {
        return $this->hasMany(OrderRow::className(), ['Id_Goods' => 'Id_Goods']);
    }
}
