<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $img
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;

    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', ], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'FIO Uz',
            'name_ru' => 'FIO Ru',
            'name_en' => 'FIO En',
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'image' => 'Xodim surati',
        ];
    }
    public function beforeSave($insert){

        $this->image = UploadedFile::getInstance($this,'image');
        if($this->image != null &&  $this->image->saveAs('../web/team/' . time() . '.' . $this->image->extension)){
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
