<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "populyar".
 *
 * @property int $id
 * @property string $img
 */
class Populyar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'populyar';
    }

    /**
     * {@inheritdoc}
     */
    public $image;
    public function rules()
    {
        return [
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
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
