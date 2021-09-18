<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "travels".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $day_uz
 * @property string $day_ru
 * @property string $day_en
 * @property int $reyting
 * @property int $star
 * @property int $summa
 * @property int $count
 * @property string $img
 * @property string $cate
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 */
class Travels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $image;
    public static function tableName()
    {
        return 'travels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'day_uz', 'day_ru', 'day_en', 'reyting', 'star', 'summa', 'count'], 'required'],
            [['reyting', 'star', 'summa', 'count', 'cate'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'day_uz', 'day_ru', 'day_en', 'img'], 'string', 'max' => 255],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Nomi Uz',
            'name_ru' => 'Nomi Ru',
            'name_en' => 'Nomi En',
            'day_uz' => 'Kecha va kunduz Uz',
            'day_ru' => 'Kecha va kunduz Ru',
            'day_en' => 'Kecha va kunduz En',
            'reyting' => 'Reyting',
            'star' => 'Yulduzlar soni',
            'summa' => 'Summa',
            'count' => '',
            'image' => 'Asosiy surat',
            'cate' => 'Turkumi',
            'text_uz'=>"Qo'shimcha ma'lumot UZ",
            'text_ru'=>"Qo'shimcha ma'lumot RU",
            'text_en'=>"Qo'shimcha ma'lumot EN",
        ];
    }
    public function beforeSave($insert){

        $this->image = UploadedFile::getInstance($this,'image');
        if($this->image != null &&  $this->image->saveAs('../web/travels/' . time() . '.' . $this->image->extension)){
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
