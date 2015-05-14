<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'nama',
            'email:email',
            'address',
            'ic_no',
            'mobile_no',
            'home_no',
            'no_tel_pej',
            'role',
            'img',
            'tarikh_daftar',
            'pendapatan',
            'pekerjaan',
            'jawatan',
            'mukim',
            'kampung',
            'negara',
            'negeri',
            'daerah',
            'kewarganegaraan',
            'status_perkahwinan',
            'bangsa',
            'agama',
            'jantina',
            'bank',
            'no_akaun',
            'tarikh_lahir',
            'tempat_lahir',
            'last_login',
            'ic_no_old',
            'bandar',
            'poskod',
            'negara_area_id',
            'state_area_id',
            'district_area_id',
            'sub_base_area_id',
            'cluster_area_id',
            'kampong_area_id',
            'status_area',
            'tarikh_daftar_kerja',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
