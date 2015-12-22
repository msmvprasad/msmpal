<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "finance_company_details".
 *
 * @property integer $id
 * @property string $cmpy_name
 * @property string $cmpy_description
 * @property string $cmpy_location
 * @property string $cmpy_area
 * @property integer $copy_status
 */
class FinanceCompanyDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'finance_company_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cmpy_name', 'cmpy_description', 'cmpy_location', 'cmpy_area', 'copy_status'], 'required'],
            [['id', 'copy_status'], 'integer'],
            [['cmpy_description', 'cmpy_location'], 'string'],
            [['cmpy_name', 'cmpy_area'], 'string', 'max' => 255],
            [['cmpy_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cmpy_name' => Yii::t('app', 'Cmpy Name'),
            'cmpy_description' => Yii::t('app', 'Cmpy Description'),
            'cmpy_location' => Yii::t('app', 'Cmpy Location'),
            'cmpy_area' => Yii::t('app', 'Cmpy Area'),
            'copy_status' => Yii::t('app', 'Copy Status'),
        ];
    }
}
