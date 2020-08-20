<?php

namespace app\models;
use yii\web\UploadedFile;
use Yii;
 use yii\imagine\Image;  
 use Imagine\Image\Box;  
/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $name
 * @property string $caption
 */
class Images extends \yii\db\ActiveRecord
{

 /**
     * @var UploadedFile
     */
    public $imageFile;


public function upload()
    {
        $imagine = Image::getImagine();

        if ($this->validate()) {
	    
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }





    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'caption','img'], 'required'],
            [['name'], 'string', 'max' => 256],
	[['img'], 'file','extensions' => 'png, jpg'],
            
       
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
            'caption' => 'Caption',
        ];
    }
}
