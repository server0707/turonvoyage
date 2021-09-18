<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $img
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string $addres_uz
 * @property string $addres_ru
 * @property string $addres_en
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'text_uz', 'text_ru', 'text_en', 'addres_uz', 'addres_ru', 'addres_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'addres_uz', 'addres_ru', 'addres_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Ismi Uz',
            'name_ru' => 'Ismi Ru',
            'name_en' => 'Ismi En',
            'image' => 'Mijoz surati',
            'text_uz' => 'Matin Uz',
            'text_ru' => 'Matin Ru',
            'text_en' => 'Matin En',
            'addres_uz' => 'Manzil Uz',
            'addres_ru' => 'Manzil Ru',
            'addres_en' => 'Manzil En',
        ];
    }
    public function beforeSave($insert){

        $this->image = UploadedFile::getInstance($this,'image');
        if($this->image != null &&  $this->image->saveAs('../web/client/' . time() . '.' . $this->image->extension)){
            $this->img = time() . '.' . $this->image->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('images/' .$this->img)))
            unlink('images/' .$this->img);
        return true;
    }

}
