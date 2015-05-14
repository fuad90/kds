<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $nama
 * @property string $email
 * @property string $address
 * @property string $ic_no
 * @property string $mobile_no
 * @property string $home_no
 * @property string $no_tel_pej
 * @property integer $role
 * @property string $img
 * @property string $tarikh_daftar
 * @property string $pendapatan
 * @property string $pekerjaan
 * @property string $jawatan
 * @property string $mukim
 * @property string $kampung
 * @property string $negara
 * @property string $negeri
 * @property string $daerah
 * @property string $kewarganegaraan
 * @property string $status_perkahwinan
 * @property string $bangsa
 * @property string $agama
 * @property string $jantina
 * @property string $bank
 * @property string $no_akaun
 * @property string $tarikh_lahir
 * @property string $tempat_lahir
 * @property string $last_login
 * @property string $ic_no_old
 * @property string $bandar
 * @property string $poskod
 * @property integer $negara_area_id
 * @property integer $state_area_id
 * @property integer $district_area_id
 * @property integer $sub_base_area_id
 * @property integer $cluster_area_id
 * @property integer $kampong_area_id
 * @property string $status_area
 * @property string $tarikh_daftar_kerja
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['address', 'mobile_no', 'home_no', 'role', 'auth_key', 'password_hash', 'status', 'created_at', 'updated_at'], 'required'],
            [['role', 'negara_area_id', 'state_area_id', 'district_area_id', 'sub_base_area_id', 'cluster_area_id', 'kampong_area_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'nama', 'email', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 200],
            [['ic_no', 'mobile_no', 'home_no', 'no_tel_pej', 'ic_no_old'], 'string', 'max' => 15],
            [['img', 'pendapatan', 'pekerjaan', 'jawatan', 'kampung', 'negara', 'negeri', 'daerah', 'kewarganegaraan', 'status_perkahwinan', 'tempat_lahir', 'last_login'], 'string', 'max' => 225],
            [['tarikh_daftar'], 'string', 'max' => 30],
            [['mukim', 'bandar', 'status_area'], 'string', 'max' => 100],
            [['bangsa', 'agama', 'jantina', 'bank', 'no_akaun', 'tarikh_lahir', 'tarikh_daftar_kerja'], 'string', 'max' => 50],
            [['poskod'], 'string', 'max' => 5],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nama' => 'Nama',
            'email' => 'Email',
            'address' => 'Address',
            'ic_no' => 'Ic No',
            'mobile_no' => 'Mobile No',
            'home_no' => 'Home No',
            'no_tel_pej' => 'No Tel Pej',
            'role' => 'Role',
            'img' => 'Img',
            'tarikh_daftar' => 'Tarikh Daftar',
            'pendapatan' => 'Pendapatan',
            'pekerjaan' => 'Pekerjaan',
            'jawatan' => 'Jawatan',
            'mukim' => 'Mukim',
            'kampung' => 'Kampung',
            'negara' => 'Negara',
            'negeri' => 'Negeri',
            'daerah' => 'Daerah',
            'kewarganegaraan' => 'Kewarganegaraan',
            'status_perkahwinan' => 'Status Perkahwinan',
            'bangsa' => 'Bangsa',
            'agama' => 'Agama',
            'jantina' => 'Jantina',
            'bank' => 'Bank',
            'no_akaun' => 'No Akaun',
            'tarikh_lahir' => 'Tarikh Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'ic_no_old' => 'Ic No Old',
            'bandar' => 'Bandar',
            'poskod' => 'Poskod',
            'negara_area_id' => 'Negara Area ID',
            'state_area_id' => 'State Area ID',
            'district_area_id' => 'District Area ID',
            'sub_base_area_id' => 'Sub Base Area ID',
            'cluster_area_id' => 'Cluster Area ID',
            'kampong_area_id' => 'Kampong Area ID',
            'status_area' => 'Status Area',
            'tarikh_daftar_kerja' => 'Tarikh Daftar Kerja',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }





    
}
