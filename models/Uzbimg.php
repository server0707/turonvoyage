<?php

namespace app\models;

use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "uzbimg".
 *
 * @property int $id
 * @property int $cate
 * @property string $img
 */
class Uzbimg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public static function tableName()
    {
        return 'uzbimg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cate'], 'required'],
            [['cate'], 'integer'],
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
            'cate' => 'Cate',
            'img' => 'Img',
        ];
    }
    public function beforeSave($insert){


        $this->image = UploadedFile::getInstance($this,'image');
        if($this->image != null &&  $this->image->saveAs('../web/photo/' . time() . '.' . $this->image->extension)){
            $this->img = time() . '.' . $this->image->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('photo/' .$this->displayname)))
            unlink('photo/' .$this->displayname);
        return true;
    }
}
