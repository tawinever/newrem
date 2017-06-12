<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "copyright".
 *
 * @property integer $id
 * @property string $page
 * @property string $section
 * @property string $position
 * @property string $content
 */
class Copyright extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'copyright';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page', 'section', 'position'], 'required'],
            [['content'], 'string'],
            [['page', 'section', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Page',
            'section' => 'Section',
            'position' => 'Position',
            'content' => 'Content',
        ];
    }
}
