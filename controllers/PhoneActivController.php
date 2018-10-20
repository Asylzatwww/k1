<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.10.2018
 * Time: 14:21
 */

namespace app\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;


class PhoneActivController
{


    public $modelClass ='app\models\Phoneactivation';

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }


    public function actionSearch()
    {
        $model = new $this->modelClass;
        $provider = new ActiveDataProvider([
            'query' => $model->find()
                //->where(["id"=>1])
                ->orderBy(["id"=>SORT_DESC]),
            'pagination' => false
        ]);

        return $provider;
    }

}