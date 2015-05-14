<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_state".
 *
 * @property integer $state_id
 * @property string $state
 * @property string $state_code
 * @property integer $country_id
 * @property string $flag
 */
class LookupState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['state'], 'string', 'max' => 225],
            [['state_code', 'flag'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'state' => 'Negeri',
            'state_code' => 'State Code',
            'country_id' => 'Negara',
            'flag' => 'Flag',
        ];
    }
}
