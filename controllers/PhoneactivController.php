<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.10.2018
 * Time: 14:21
 */

namespace app\controllers;

use yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use app\models\Phone;


class PhoneactivController extends ActiveController
{


    public $modelClass ='app\models\Phone';

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

    /*
     *
     *
     *
     *
     *
     *


INSERT INTO phone (phone, money) VALUES("0553106808",
          (
             SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone="0553106808" AND active="0"
          )
      )

UPDATE phone SET money=(
             SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone="0553106808" AND active="0"
    ) WHERE phone="0553106808"


UPDATE phoneactivation SET active="1" WHERE phone="0553106808"

     *
     * */


    public function actionPhone($phone)
    {

        $connection = Yii::$app->getDb();



        $model = Phone::find()->where(['phone'=> $phone])->one();

        if($model == null) {


            $connection->createCommand('

    INSERT INTO phone (phone, money) VALUES(:phone,
          IFNULL(
             SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone=:phone AND active="0"
          ,0)
      )

    ', [':phone' => $phone])->execute();

        }
        else
            {

                $connection->createCommand("

UPDATE phone SET money=:money+
          IFNULL(
             (SELECT SUM(CAST(SUBSTRING(money,27,8) AS DECIMAL(5,2)))
                FROM phoneactivation WHERE phone=:phone AND active=\"0\")
              ,0)
           
     WHERE phone=:phone

    ", [':phone' => $phone, ':money' => $model->money])->execute();


            }


        $connection->createCommand("

UPDATE phoneactivation SET active=\"1\" WHERE phone=:phone

    ", [':phone' => $phone])->execute();









        $model = new $this->modelClass;
        $provider = new ActiveDataProvider([
            'query' => $model->find()
                ->where(["phone"=>$phone])
                ->orderBy(["id"=>SORT_DESC]),
            'pagination' => false
        ]);

        return $provider;
    }
}