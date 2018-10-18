<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.10.2018
 * Time: 7:41
 */

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\PoputkaSearch;



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
        /*if (!empty($_GET)) {
            $model = new $this->modelClass;
            foreach ($_GET as $key => $value) {
                if (!$model->hasAttribute($key)) {
                    throw new \yii\web\HttpException(404, 'Invalid attribute:' . $key);
                }
            }
            try {
                $provider = new ActiveDataProvider([
                    'query' => $model->find()->where($_GET),
                    'pagination' => false
                ]);
            } catch (Exception $ex) {
                throw new \yii\web\HttpException(500, 'Internal server error');
            }

            if ($provider->getCount() <= 0) {
                throw new \yii\web\HttpException(404, 'No entries found with this query string');
            } else {
                return $provider;
            }
        } else {
            throw new \yii\web\HttpException(400, 'There are no query string');
        }*/

        $model = new $this->modelClass;
        $provider = new ActiveDataProvider([
            'query' => $model->find()->where(["id"=>1]),
            'pagination' => false
        ]);

        return $provider;
    }

    public function actionIndex()
    {
        /*$searchModel = new PoputkaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        var_dump($searchModel);*/
        $model = new $this->modelClass;
        $provider = new ActiveDataProvider([
            'query' => $model->find()->where(["id"=>1]),
            'pagination' => false
        ]);

        return $provider;


    }



}