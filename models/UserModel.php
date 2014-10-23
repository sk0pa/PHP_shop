<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $Id_User
 * @property string $Email
 * @property string $Login
 * @property string $Password
 * @property string $Phone
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Email', 'Login', 'Password', 'Phone'], 'required'],
            [['Email', 'Login'], 'string', 'max' => 30],
            [['Password'], 'string', 'max' => 40],
            [['Phone'], 'string', 'max' => 15],
            [['Email', 'Login'], 'unique', 'targetAttribute' => ['Email', 'Login'], 'message' => 'The combination of Email and Login has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_User' => 'Id  User',
            'Email' => 'Email',
            'Login' => 'Login',
            'Password' => 'Password',
            'Phone' => 'Phone',
        ];
    }
}
