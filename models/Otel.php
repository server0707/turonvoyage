<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "otel".
 *
 * @property int $id
 * @property string $img
 * @property string $cate
 */
class Otel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;

    public static function tableName()
    {
        return 'otel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cate'], 'required'],
            [['img', 'cate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Suratni tanlang',
            'cate' => "Sayohat joyi",
        ];
    }

    public function Saqlash()
    {

        $files = UploadedFile::getInstances($this, 'image');

        foreach ($files as $file) {
            if ($file != null && $file->saveAs('../web/otel/' . $file->baseName . '.' . $file->extension)) {
                $images = new Otel();
                $images->img = $file->baseName . '.' . $file->extension;
                $images->cate = $this->cate;
                $images->save();
            }
        }

        return true;

    }


    public function afterDelete(){
        if(file_exists(('images/' .$this->img)))
            unlink('images/' .$this->img);
        return true;
    }

}
