<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $category_name
 * @property string $category_description
 * @property integer $category_status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'category_description', 'category_status'], 'required'],
            [['category_description'], 'string'],
            [['category_status'], 'integer'],
            [['category_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'category_description' => Yii::t('app', 'Category Description'),
            'category_status' => Yii::t('app', 'Category Status'),
        ];
    }

    public static function categoryStatus ()
    {
        return ['1' => 'show', '0' => 'hide'];
    }
}
