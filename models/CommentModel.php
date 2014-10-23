<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $Id_Comment
 * @property integer $Id_User
 * @property integer $Id_Goods
 * @property string $Text
 *
 * @property Goods $idGoods
 * @property User $idUser
 */
class CommentModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Comment', 'Id_User', 'Id_Goods'], 'integer'],
            [['Id_User', 'Id_Goods', 'Text'], 'required'],
            [['Text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Comment' => 'Id  Comment',
            'Id_User' => 'Id  User',
            'Id_Goods' => 'Id  Goods',
            'Text' => 'Text',
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
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['Id_User' => 'Id_User']);
    }
}
