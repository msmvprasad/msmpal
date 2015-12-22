<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_revenue_details".
 *
 * @property integer $id
 * @property integer $revenue_id
 * @property integer $user_id
 * @property integer $user_type
 */
class UserRevenueDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_revenue_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['revenue_id', 'user_id', 'user_type'], 'required'],
            [['revenue_id', 'user_id', 'user_type'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'revenue_id' => Yii::t('app', 'Revenue ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_type' => Yii::t('app', 'User Type'),
        ];
    }
}
