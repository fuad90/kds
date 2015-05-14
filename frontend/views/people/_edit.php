<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\LookupCountry;
use common\models\LookupState;
use common\models\LookupDistrict;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use common\models\LookupAgama;
use common\models\LookupBangsa;
use common\models\LookupKategoriOku;
use common\models\LookupPerkahwinan;
use common\models\LookupSpending;
use common\models\LookupIncome;
use common\models\LookupEduLevel;
use common\models\LookupHubungan;
use common\models\LookupEduLevelUnder17;

$negara = ArrayHelper::map(LookupCountry::find()->asArray()->all(), 'country_id', 'country');
$state = ArrayHelper::map(LookupState::find()->where(['country_id'=>$model->country_id])->asArray()->all(), 'state_id', 'state');
$district = ArrayHelper::map(LookupDistrict::find()->where(['state_id'=>$model->state_id])->asArray()->all(), 'district_id', 'district');
$subbase = ArrayHelper::map(LookupSubBase::find()->where(['district_id'=>$model->district_id])->asArray()->all(),'sub_base_id','sub_base');
$cluster = ArrayHelper::map(LookupCluster::find()->where(['sub_base_id'=>$model->sub_base_id])->asArray()->all(),'cluster_id','cluster');
$kampung = ArrayHelper::map(LookupKampung::find()->where(['cluster_id'=>$model->cluster_id])->asArray()->all(),'kampung_id','kampung');

$agama = ArrayHelper::map(LookupAgama::find()->asArray()->all(), 'id', 'agama');
$bangsa = ArrayHelper::map(LookupBangsa::find()->asArray()->all(), 'id', 'bangsa');
$kategoriOku = ArrayHelper::map(LookupKategoriOku::find()->asArray()->all(), 'id', 'kategori_oku');
$perkahwinan = ArrayHelper::map(LookupPerkahwinan::find()->asArray()->all(), 'id', 'status_perkahwinan');
$spending = ArrayHelper::map(LookupSpending::find()->asArray()->all(), 'id', 'spending');
$income = ArrayHelper::map(LookupIncome::find()->asArray()->all(), 'id', 'income');
$edu = ArrayHelper::map(LookupEduLevel::find()->asArray()->all(), 'id', 'edu_level');
$hubungan = ArrayHelper::map(LookupHubungan::find()->asArray()->all(), 'id', 'hubungan');
$edu17 = ArrayHelper::map(LookupEduLevelUnder17::find()->asArray()->all(), 'id', 'edu_level_under_17');
$i = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11');
$citizen = array('Warganegara'=>'Warganegara','Bukan Warganegara'=>'Bukan Warganegara','Penduduk Tetap'=>'Penduduk Tetap');
/* @var $this yii\web\View */
/* @var $model common\models\People */
/* @var $form yii\widgets\ActiveForm */
?>

	<div class="tabbable-line">
		<ul class="nav nav-tabs ">
			<li class="active">
				<a href="#tab_1" data-toggle="tab">
				 Responden </a>
			</li>
			<li>
				<a href="#tab_2" data-toggle="tab">
				Pasangan </a>
			</li>
			<li>
				<a href="#tab_3" data-toggle="tab">
				Tanggungan </a>
			</li>
			<li>
				<a href="#tab_4" data-toggle="tab">
				Tambahan </a>
			</li>
            <li>
                <a href="#tab_5" data-toggle="tab">
                OKU </a>
            </li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">

                    <?php $form = ActiveForm::begin([
                            'id' => 'people-form',
                            'enableAjaxValidation' => false,
                            'enableClientValidation' => false,
                        ]); ?>
                            <?=$form->errorSummary($model);?>
                            <br>
                <?php if(Yii::$app->session->hasFlash('updatePeople')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('updatePeople'); ?>
                    </div>
                <?php endif; ?>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'tarikh_soal_selidik',['class'=>'form-control date-picker','data-date-format'=>'dd/mm/yyyy']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'tarikh_soal_selidik'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'tarikh_soal_selidik'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'mukim',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'mukim'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'mukim'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'name',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'name'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'name'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'name_nick',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'name_nick'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'name_nick'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'ic_no',['class'=>'form-control','placeholder'=>'Eg. 900907105331','maxlength'=>12]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'ic_no'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'ic_no'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'ic_no_old',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'ic_no_old'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'ic_no_old'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'dob',['class'=>'form-control date-picker','data-date-format'=>'dd/mm/yyyy']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'dob'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'dob'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'birth_place',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'birth_place'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'birth_place'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextArea($model,'address',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'address'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'address'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'postcode',['class'=>'form-control','maxlength'=>5]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'postcode'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'postcode'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'citizen', $citizen, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'citizen'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'citizen'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'country_id', $negara, 
                                                [
                                                    'prompt'=>'(Sila Pilih)','id'=>'country',
                                                    'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['people/liststate','id'=>'']).'"+$(this).val(), function( data ) {$( "select#state" ).html( data );});',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'country_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'country_id'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'state_id', $state, 
                                                [
                                                'prompt'=>'','id'=>'state',
                                                'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['people/listdistrict','id'=>'']).'"+$(this).val(), function( data ) {$( "select#district" ).html( data );});',

                                                'class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'state_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'state_id'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'district_id', $district, 
                                                [
                                                    'prompt'=>'','id'=>'district',
                                                    'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['people/listsubbase','id'=>'']).'"+$(this).val(), function( data ) {$( "select#subbase" ).html( data );});',
   
                                                    'class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'district_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'district_id'); ?></span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                          <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'sub_base_id', $subbase, 
                                                [
                                                    'prompt'=>'','id'=>'subbase',
                                                    'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['people/listcluster','id'=>'']).'"+$(this).val(), function( data ) {$( "select#cluster" ).html( data );});',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'sub_base_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'sub_base_id'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                               <?= Html::activeDropDownList($model, 'cluster_id', $cluster, 
                                                [
                                                    'prompt'=>'','id'=>'cluster',
                                                    'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['people/listkampung','id'=>'']).'"+$(this).val(), function( data ) {$( "select#kampung" ).html( data );});',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'cluster_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'cluster_id'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'kampung_id', $kampung, 
                                                [
                                                    'prompt'=>'','id'=>'kampung',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'kampung_id'); ?> <span class="required">*</span></label>
                                                <span class="help-block"><?= Html::error($model,'kampung_id'); ?></span>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'gender',
                                                 [
                                                    'Lelaki' => 'Lelaki',
                                                    'Perempuan' => 'Perempuan',
                                                 ], 
                                                 ['prompt'=>'(Sila Pilih)','id'=>'form_control_1','class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'gender'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'gender'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'religion', $agama, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'religion'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'religion'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'race', $bangsa, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'race'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'race'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'marital_status', $perkahwinan, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'marital_status'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'marital_status'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'no_of_children',$i, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'no_of_children'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'no_of_children'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'mobile_no',['id'=>'mask_mobile','class'=>'form-control','placeholder'=>'011-*********']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'mobile_no'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'mobile_no'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'home_no',['id'=>'mask_home','class'=>'form-control','placeholder'=>'03-********']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'home_no'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'home_no'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'email',['class'=>'form-control','placeholder'=>'Eg. cypress@gmail.com']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'email'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'email'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <p class="title_h4">Adakah anda tergolong dalam Orang Kelainan Upaya (OKU) ? <span class="required">*</span></p>


                                            <div class="col-md-12">
                                                <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <?php if ($model->oku == "Ya") { ?>
                                                                <input type="radio" id="radio53" name="People[oku]" class="md-radiobtn" value="Ya" checked="checked">
                                                                
                                                            <?php } else { ?>
                                                                <input type="radio" id="radio53" name="People[oku]" class="md-radiobtn" value="Ya">
                                                            <?php } ?>
                                                            
                                                            <label for="radio53">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>
                                                            Ya </label>
                                                        </div>
                                                       <div class="md-radio">
                                                            <?php if ($model->oku == "Tidak") { ?>
                                                                <input type="radio" id="radio54" name="People[oku]" class="md-radiobtn" value="Tidak" checked="checked">
                                                                
                                                            <?php } else { ?>
                                                                <input type="radio" id="radio54" name="People[oku]" class="md-radiobtn" value="Tidak">
                                                            <?php } ?>
                                                            <label for="radio54">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>
                                                            Tidak </label>
                                                        </div>
                                   
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <?php if ($model->oku == "Ya") { ?>
                                
                             <div class="row" id="hideshow" >
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model_oku,'no_pendaftaran',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'no_pendaftaran'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'no_pendaftaran'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model_oku, 'kategori_oku', $kategoriOku, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'kategori_oku'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'kategori_oku'); ?></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextArea($model_oku,'nota',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'nota'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'nota'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           

                            <?php } ?>
                            <div class="row" id="hideshow" style="display:none;">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model_oku,'no_pendaftaran',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'no_pendaftaran'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'no_pendaftaran'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model_oku, 'kategori_oku', $kategoriOku, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'kategori_oku'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'kategori_oku'); ?></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextArea($model_oku,'nota',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model_oku,'nota'); ?></label>
                                                <span class="help-block"><?= Html::error($model_oku,'nota'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'profession_status',
                                                 [
                                                    'Bekerja' => 'Bekerja',
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                 ], 
                                                 ['prompt'=>'(Sila Pilih)','id'=>'form_control','class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'profession_status'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'profession_status'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'profession',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'profession'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'profession'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'job_position',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'job_position'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'job_position'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextInput($model,'job_else',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'job_else'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'job_else'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'income', $income, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'income'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'income'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeDropDownList($model, 'spending', $spending, 
                                                [
                                                    'prompt'=>'(Sila Pilih)',
                                                    'class'=>'form-control',

                                                ]); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'spending'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'spending'); ?></span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input">
                                                <?= Html::activeTextArea($model,'nota',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'nota'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'nota'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['id'=>'button-submit','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>         

                            <?php ActiveForm::end(); ?>
			</div>
			<div class="tab-pane" id="tab_2">
				<?php if(Yii::$app->session->hasFlash('createWife')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('createWife'); ?>
                    </div>
                <?php endif; ?>
                <?php if(Yii::$app->session->hasFlash('updateWife')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('updateWife'); ?>
                    </div>
                <?php endif; ?>
				<?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/wife/create','id'=>$model->people_id]),'class' => 'btn btn-success','id'=>'wifeCreate']) ?>
				<br><br>

			    <?= GridView::widget([
			        'dataProvider' => $model_wife,
			        'columns' => [
			            ['class' => 'yii\grid\SerialColumn'],
			            'wife_name',
			            'wife_ic',
			            'wife_work',
			            'wife_oku',
                        [
                            'header' => 'Tindakan',
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{lihat}   {kemaskini}',
                                'buttons' => [
                                    'kemaskini' => function ($url, $model_wife) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Edit</span>', 
                                                $url,['value'=>Url::to(['/wife/update','id'=>$model_wife->wife_id]),'title'=> Yii::t('app','Kemaskini'),'class'=>'wifeUpdate']);

                                    },

                                    /*'buang' => function ($url, $model_wife) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Buang</span>', $url, [
                                                    'title' => Yii::t('app', 'Buang'),
                                        ]);

                                    },*/

                                ],
                                'urlCreator' => function ($action, $model_wife, $key, $index) {
									if ($action === 'kemaskini') {
                                        $url = FALSE;
                                        return $url;
                                    }
                                    /*if ($action === 'buang') {
                                        $url = ['/wife/delete','id'=>$model_wife->wife_id];
                                        return $url;
                                    }*/
                                }
                            ],
			        ],
			    ]); ?>
			</div>
			<div class="tab-pane" id="tab_3">
				<?php if(Yii::$app->session->hasFlash('createTanggungan')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('createTanggungan'); ?>
                    </div>
                <?php endif; ?>
                <?php if(Yii::$app->session->hasFlash('updateTanggungan')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('updateTanggungan'); ?>
                    </div>
                <?php endif; ?>
				<?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/tanggungan/create','id'=>$model->people_id]),'class' => 'btn btn-success','id'=>'tanggunganCreate']) ?>
				<br><br>
				    <?= GridView::widget([
				        'dataProvider' => $model_tanggungan,
				        'columns' => [
				            ['class' => 'yii\grid\SerialColumn'],
				            'nama_tanggungan',
				            'no_ic_tanggungan',
				            'tarikh_lahir',
				            'edu_level',
				            'tanggungan_kerja',
				            'hubungan',
				            'tanggungan_oku',
				            'note',
				            // 'people_id',
                        [
                            'header' => 'Tindakan',
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{lihat}   {kemaskini}',
                                'buttons' => [
                                    'kemaskini' => function ($url, $model_tanggungan) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Edit</span>', 
                                                $url,['value'=>Url::to(['/tanggungan/update','id'=>$model_tanggungan->tanggungan_id]),'title'=> Yii::t('app','Kemaskini'),'class'=>'tanggunganUpdate']);

                                    },

                                    /*'buang' => function ($url, $model_wife) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Buang</span>', $url, [
                                                    'title' => Yii::t('app', 'Buang'),
                                        ]);

                                    },*/

                                ],
                                'urlCreator' => function ($action, $model_tanggungan, $key, $index) {
									if ($action === 'kemaskini') {
                                        $url = FALSE;
                                        return $url;
                                    }
                                    /*if ($action === 'buang') {
                                        $url = ['/wife/delete','id'=>$model_wife->wife_id];
                                        return $url;
                                    }*/
                                }
                            ],
				        ],
				    ]); ?>
			</div>
			<div class="tab-pane" id="tab_4">

                <?php if(Yii::$app->session->hasFlash('updateAnswer')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('updateAnswer'); ?>
                    </div>
                <?php endif; ?>

			    <?= GridView::widget([
			        'dataProvider' => $model_answer,

			        'columns' => [
			            ['class' => 'yii\grid\SerialColumn'],
			            [
			             'attribute' => 'Soalan',
			             'value' => 'question.soalan'
			            ],
			            'answer',
			           
                        [
                            'header' => 'Tindakan',
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{lihat}   {kemaskini}',
                                'buttons' => [
                                    'kemaskini' => function ($url, $model_answer) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Edit</span>', 
                                                $url,['value'=>Url::to(['/answer/update','id'=>$model_answer->id_answer]),'title'=> Yii::t('app','Kemaskini'),'class'=>'answerUpdate']);

                                    },

                                    /*'buang' => function ($url, $model_wife) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Buang</span>', $url, [
                                                    'title' => Yii::t('app', 'Buang'),
                                        ]);

                                    },*/

                                ],
                                'urlCreator' => function ($action, $model_answer, $key, $index) {
									if ($action === 'kemaskini') {
                                        $url = FALSE;
                                        return $url;
                                    }
                                    /*if ($action === 'buang') {
                                        $url = ['/wife/delete','id'=>$model_wife->wife_id];
                                        return $url;
                                    }*/
                                }
                            ],
			        ],
			    ]); ?>



			</div>
            <div class="tab-pane" id="tab_5">
                <?php if(Yii::$app->session->hasFlash('createTanggunganOku')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('createTanggunganOku'); ?>
                    </div>
                <?php endif; ?>
                <?php if(Yii::$app->session->hasFlash('updateTanggunganOku')):?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert"></button>
                         <?php echo  Yii::$app->session->getFlash('updateTanggunganOku'); ?>
                    </div>
                <?php endif; ?>
                <?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/tanggungan-oku/create','id'=>$model->people_id]),'class' => 'btn btn-success','id'=>'tanggunganokuCreate']) ?>
                <br><br>
                <?= GridView::widget([
                    'dataProvider' => $model_tanggunganoku,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'nama',
                        'umur',
                        'hubungan',
                        'no_pendaftaran',
                        'kategori',
                        'nota',
                        'tahap_pendidikan',
                        'nama_sekolah',

                        [
                            'header' => 'Tindakan',
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{lihat}   {kemaskini}',
                                'buttons' => [
                                    'kemaskini' => function ($url, $model_tanggunganoku) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Edit</span>', 
                                                $url,['value'=>Url::to(['/tanggungan-oku/update','id'=>$model_tanggunganoku->id]),'title'=> Yii::t('app','Kemaskini'),'class'=>'tanggunganokuUpdate']);

                                    },

                                    /*'buang' => function ($url, $model_wife) {
                                        return Html::a('<span class="btn default btn-xs red-stripe">Buang</span>', $url, [
                                                    'title' => Yii::t('app', 'Buang'),
                                        ]);

                                    },*/

                                ],
                                'urlCreator' => function ($action, $model_tanggunganoku, $key, $index) {
                                    if ($action === 'kemaskini') {
                                        $url = FALSE;
                                        return $url;
                                    }
                                    /*if ($action === 'buang') {
                                        $url = ['/wife/delete','id'=>$model_wife->wife_id];
                                        return $url;
                                    }*/
                                }
                            ],
                    ],
                ]); ?>
            </div>
		</div>
	</div>		
       
