<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "health_records".
 *
 * @property integer $id
 * @property string $record_description
 * @property string $record_name
 * @property integer $record_status
 * @property string $created_date
 */
class HealthRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'health_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'record_description', 'record_name', 'record_status'], 'required'],
            [['id', 'record_status'], 'integer'],
            [['record_description'], 'string'],
            [['created_date'], 'safe'],
            [['record_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'record_description' => Yii::t('app', 'Record Description'),
            'record_name' => Yii::t('app', 'Record Name'),
            'record_status' => Yii::t('app', 'Record Status'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }
}
