<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "dictionary".
 *
 * @property integer $id
 * @property string $widget_name
 * @property string $field
 * @property string $description
 */
class Dictionary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dictionary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['widget_name', 'field', 'description'], 'required'],
            [['description'], 'string'],
            [['widget_name', 'field'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'widget_name' => 'Widget Name',
            'field' => 'Field',
            'description' => 'Description',
        ];
    }

    public static function getDashInfo(){
        $dictionaries = Dictionary::find()->asArray()->all();
        return ArrayHelper::map($dictionaries,'field','description','widget_name');
    }

}
