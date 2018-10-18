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
            [['toLocation'], 'required'],
            //[['seats', 'timeToLive', 'fromLocation', 'toLocation'], 'required'],
            [['seats', 'timeToLive'], 'integer'],
            [['fromLocation', 'toLocation'], 'string', 'max' => 300],
        ];
    }

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
