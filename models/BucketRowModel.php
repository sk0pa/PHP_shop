<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bucket_row".
 *
 * @property integer $Id_Bucket_Part
 * @property integer $Id_Bucket
 * @property integer $Id_Goods
 * @property integer $Number
 *
 * @property Goods $idGoods
 * @property Bucket $idBucket
 */
class BucketRowModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bucket_row';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Bucket', 'Id_Goods', 'Number'], 'required'],
            [['Id_Bucket', 'Id_Goods', 'Number'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Bucket_Part' => 'Id  Bucket  Part',
            'Id_Bucket' => 'Id  Bucket',
            'Id_Goods' => 'Id  Goods',
            'Number' => 'Number',
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
    public function getIdBucket()
    {
        return $this->hasOne(Bucket::className(), ['Id_Bucket' => 'Id_Bucket']);
    }
}
