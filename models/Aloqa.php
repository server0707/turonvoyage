<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aloqa".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 */
class Aloqa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aloqa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email','date', 'phone', 'message'], 'required'],
            [['message','date'], 'string'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'date' => '',
            'phone' => 'Phone',
            'message' => 'Message',
        ];
    }
}
