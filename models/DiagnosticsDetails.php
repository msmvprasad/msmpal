<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnostics_details".
 *
 * @property integer $id
 * @property string $diagnostics_name
 * @property string $diagnostics_description
 * @property string $diagnostics_type
 * @property string $created_date
 */
class DiagnosticsDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnostics_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diagnostics_name', 'diagnostics_description', 'diagnostics_type'], 'required'],
            [['diagnostics_description'], 'string'],
            [['created_date'], 'safe'],
            [['diagnostics_name', 'diagnostics_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'diagnostics_name' => Yii::t('app', 'Diagnostics Name'),
            'diagnostics_description' => Yii::t('app', 'Diagnostics Description'),
            'diagnostics_type' => Yii::t('app', 'Diagnostics Type'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }
}
