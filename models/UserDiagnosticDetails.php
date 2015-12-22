<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_diagnostic_details".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $diagnostic_id
 */
class UserDiagnosticDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_diagnostic_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'diagnostic_id'], 'required'],
            [['user_id', 'user_type', 'diagnostic_id'], 'integer']
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
            'diagnostic_id' => Yii::t('app', 'Diagnostic ID'),
        ];
    }
}
