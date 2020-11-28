<?php

namespace frontend\models;

use Yii;
use backend\models\Adminmdc;

/**
 * This is the model class for table "bookmdc".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $datefrom
 * @property string $dateto
 */
class Bookmdc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookmdc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'datefrom', 'dateto'], 'required'],
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
            'name' => "Ім'я",
            'phone' => 'Телефон',
            'datefrom' => 'Дата з',
            'dateto' => 'Дата до',
        ];
    }

    public function saveAdmin()
    {
        $adminmdc = new Adminmdc();
        $adminmdc->name = $this->name;
        $adminmdc->phone = $this->phone;
        $adminmdc->datefrom = $this->datefrom;
        $adminmdc->dateto = $this->dateto;
        $adminmdc->save();
    }
}
