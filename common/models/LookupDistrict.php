<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_district".
 *
 * @property integer $district_id
 * @property string $district
 * @property string $district_code
 * @property string $state_id
 * @property integer $country_id
 */
class LookupDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['district'], 'string', 'max' => 225],
            [['district_code', 'state_id'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'district_id' => 'District ID',
            'district' => 'District',
            'district_code' => 'District Code',
            'state_id' => 'State ID',
            'country_id' => 'Country ID',
        ];
    }
}
