<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_finance_details".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $finance_id
 */
class UserFinanceDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_finance_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'finance_id'], 'required'],
            [['user_id', 'user_type', 'finance_id'], 'integer']
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
            'finance_id' => Yii::t('app', 'Finance ID'),
        ];
    }
}
