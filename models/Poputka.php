<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poputka".
 *
 * @property integer $id
 * @property integer $seats
 * @property integer $timeToLive
 * @property string $fromLocation
 * @property string $toLocation
 */
class Poputka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poputka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seats', 'timeToLive'], 'required'],
            //[['seats', 'timeToLive', 'fromLocation', 'toLocation'], 'required'],
            [['seats', 'timeToLive'], 'integer'],
            [['fromLocation', 'toLocation'], 'string', 'max' => 300],
        ];
    }
//curl -d "seats=1&timeToLive=6" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://asylzatwww.beget.tech/index.php?r=poput/create
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seats' => 'Seats',
            'timeToLive' => 'Time To Live',
            'fromLocation' => 'From Location',
            'toLocation' => 'To Location',
        ];
    }
}
