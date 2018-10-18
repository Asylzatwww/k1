<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.10.2018
 * Time: 7:41
 */

namespace app\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;



class PoputController extends ActiveController
{
    public $modelClass ='app\models\Poputka';

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
            'query' => $model->find()->where(["id"=>1]),
            'pagination' => false
        ]);

        return $provider;
    }


}