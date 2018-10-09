<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poputka".
 *
 * @property integer $id
 * @property integer $seats
 * @property integer $timeToLive
 * @property integer $fromLocation
 * @property integer $toLocation
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
            [['seats', 'timeToLive', 'fromLocation', 'toLocation'], 'required'],
            [['seats', 'timeToLive', 'fromLocation', 'toLocation'], 'integer'],
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
