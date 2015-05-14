<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_kampung".
 *
 * @property integer $kampung_id
 * @property string $kampung
 * @property integer $cluster_id
 * @property integer $sub_base_id
 * @property integer $district_id
 * @property integer $state_id
 * @property integer $country_id
 * @property integer $kampcom_id
 */
class LookupKampung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_kampung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cluster_id', 'sub_base_id', 'district_id', 'state_id', 'country_id', 'kampcom_id'], 'integer'],
            [['kampung'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kampung_id' => 'Kampung ID',
            'kampung' => 'Kampung',
            'cluster_id' => 'Cluster ID',
            'sub_base_id' => 'Sub Base ID',
            'district_id' => 'District ID',
            'state_id' => 'State ID',
            'country_id' => 'Country ID',
            'kampcom_id' => 'Kampcom ID',
        ];
    }
}
