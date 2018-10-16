<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.10.2018
 * Time: 7:41
 */

namespace app\controllers;

use yii\rest\ActiveController;


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
}