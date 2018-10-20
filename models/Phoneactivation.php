<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phoneactivation".
 *
 * @property integer $id
 * @property string $phone
 * @property string $active
 * @property double $money
 */
class Phoneactivation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phoneactivation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'active', 'money'], 'required'],
            [['money', 'phone', 'active'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'active' => 'Active',
            'money' => 'Money',
        ];
    }
}
