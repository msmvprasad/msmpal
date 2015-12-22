<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_health_records".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $health_id
 */
class UserHealthRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_health_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'health_id'], 'required'],
            [['user_id', 'user_type', 'health_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_type' => Yii::t('app', 'User Type'),
            'health_id' => Yii::t('app', 'Health ID'),
        ];
    }
}
