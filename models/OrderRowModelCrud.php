<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderRowModel;

/**
 * OrderRowModelCrud represents the model behind the search form about `app\models\OrderRowModel`.
 */
class OrderRowModelCrud extends OrderRowModel
{
    public function rules()
    {
        return [
            [['Id_Order_Row', 'Id_Order', 'Id_Goods', 'Number'], 'integer'],
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
        $query = OrderRowModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Order_Row' => $this->Id_Order_Row,
            'Id_Order' => $this->Id_Order,
            'Id_Goods' => $this->Id_Goods,
            'Number' => $this->Number,
            'Price' => $this->Price,
        ]);

        return $dataProvider;
    }
}
