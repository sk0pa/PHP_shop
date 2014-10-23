<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bucket".
 *
 * @property integer $Id_Bucket
 * @property integer $Id_User
 *
 * @property User $idUser
 * @property BucketRow[] $bucketRows
 */
class BucketModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bucket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_User'], 'required'],
            [['Id_User'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Bucket' => 'Id  Bucket',
            'Id_User' => 'Id  User',
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
    public function getBucketRows()
    {
        return $this->hasMany(BucketRow::className(), ['Id_Bucket' => 'Id_Bucket']);
    }
}
