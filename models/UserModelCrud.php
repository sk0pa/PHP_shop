<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserModel;

/**
 * UserModelCrud represents the model behind the search form about `app\models\UserModel`.
 */
class UserModelCrud extends UserModel
{
    public function rules()
    {
        return [
            [['Id_User'], 'integer'],
            [['Email', 'Login', 'Password', 'Phone'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UserModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_User' => $this->Id_User,
        ]);

        $query->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Login', $this->Login])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'Phone', $this->Phone]);

        return $dataProvider;
    }
}
