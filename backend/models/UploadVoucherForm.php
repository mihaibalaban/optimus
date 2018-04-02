<?php

namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadVoucherForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $cvFile;

    public function rules()
    {
        return [
            [['cvFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, doc, docx, xls'],
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