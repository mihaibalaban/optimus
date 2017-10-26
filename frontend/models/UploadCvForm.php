<?php

namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadCvForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $cvFile;

    public function rules()
    {
        return [
            [['cvFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, doc'],
        ];
    }

    public function upload()
        {
        if ($this->validate()) {
            $this->cvFile->saveAs('uploads/' . $this->cvFile->baseName . '.' . $this->cvFile->extension);
            $this->cvFile = null;
            return true;
        } else {
            return false;
        }
    }
}