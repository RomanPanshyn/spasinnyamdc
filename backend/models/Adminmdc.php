<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "adminmdc".
 *
 * @property int $id
 * @property int $roomnumber
 * @property int $totaldays
 * @property string $name
 * @property string $phone
 * @property string $datefrom
 * @property string $dateto
 */
class Adminmdc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adminmdc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'datefrom', 'dateto'], 'required'],
            [['roomnumber', 'totaldays'], 'integer'],
            [['name', 'phone', 'datefrom', 'dateto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roomnumber' => 'Номер кімнати',
            'totaldays' => 'Всього діб',
            'name' => "Ім'я",
            'phone' => 'Телефон',
            'datefrom' => 'Дата з',
            'dateto' => 'Дата до',
        ];
    }
}
