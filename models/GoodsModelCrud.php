<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GoodsModel;

/**
 * GoodsModelCrud represents the model behind the search form about `app\models\GoodsModel`.
 */
class GoodsModelCrud extends GoodsModel
{
    public function rules()
    {
        return [
            [['Id_Goods'], 'integer'],
            [['Producer', 'Model', 'Type', 'Kind'], 'safe'],
            [['Price'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = GoodsModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Goods' => $this->Id_Goods,
            'Price' => $this->Price,
        ]);

        $query->andFilterWhere(['like', 'Producer', $this->Producer])
            ->andFilterWhere(['like', 'Model', $this->Model])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Kind', $this->Kind]);

        return $dataProvider;
    }
}
