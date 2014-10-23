<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CommentModel;

/**
 * CommentModelCrud represents the model behind the search form about `app\models\CommentModel`.
 */
class CommentModelCrud extends CommentModel
{
    public function rules()
    {
        return [
            [['Id_Comment', 'Id_User', 'Id_Goods'], 'integer'],
            [['Text'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CommentModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Comment' => $this->Id_Comment,
            'Id_User' => $this->Id_User,
            'Id_Goods' => $this->Id_Goods,
        ]);

        $query->andFilterWhere(['like', 'Text', $this->Text]);

        return $dataProvider;
    }
}
