<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BucketModel;

/**
 * BucketModelCrud represents the model behind the search form about `app\models\BucketModel`.
 */
class BucketModelCrud extends BucketModel
{
    public function rules()
    {
        return [
            [['Id_Bucket', 'Id_User'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = BucketModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Bucket' => $this->Id_Bucket,
            'Id_User' => $this->Id_User,
        ]);

        return $dataProvider;
    }
}
