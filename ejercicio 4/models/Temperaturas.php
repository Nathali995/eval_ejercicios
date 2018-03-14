<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temperaturas".
 *
 * @property integer $id
 * @property integer $cod
 * @property string $fecha
 * @property integer $temp
 */
class Temperaturas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temperaturas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod', 'temp'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cod' => 'Cod',
            'fecha' => 'Fecha (AA-MM-DD)',
            'temp' => 'Temperatura',
        ];
    }
}
