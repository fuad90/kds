<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\LookupCountry;
use common\models\LookupState;
use common\models\LookupDistrict;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;

$negara = ArrayHelper::map(LookupCountry::find()->asArray()->all(), 'country_id', 'country');
$state = ArrayHelper::map(LookupState::find()->where(['country_id'=>$model->country_id])->asArray()->all(), 'state_id', 'state');
$district = ArrayHelper::map(LookupDistrict::find()->where(['state_id'=>$model->state_id])->asArray()->all(), 'district_id', 'district');
$subbase = ArrayHelper::map(LookupSubBase::find()->where(['district_id'=>$model->district_id])->asArray()->all(),'sub_base_id','sub_base');
$cluster = ArrayHelper::map(LookupCluster::find()->where(['sub_base_id'=>$model->sub_base_id])->asArray()->all(),'cluster_id','cluster');
$kampung = ArrayHelper::map(LookupKampung::find()->where(['cluster_id'=>$model->cluster_id])->asArray()->all(),'kampung_id','kampung');

?>
 <?php $form = ActiveForm::begin(); ?>

                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number">
                                                1 </span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Maklumat Sukarelawan </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number">
                                                2 </span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Info </span>
                                                </a>
                                            </li>

                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success">
                                            </div>
                                        </div>
                                        <div class="tab-content">
                        
                                            <div class="tab-pane active" id="tab1">
                                                    <?=$form->errorSummary($model);?>
                                                    <div class="caption font-green-haze">
                                                        <span class="caption-subject bold uppercase"> Maklumat Sukarelawan</span>
                                                    </div>
                                                    <br>
                                                    
                                                    <div class="row">
                                                        <div class="portlet-body form">
                                                            <div class="form-body">

                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'date',['class'=>'form-control date-picker','data-date-format'=>'dd/mm/yyyy']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'date'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'date'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'day',
                                                                         [
                                                                            'Isnin' => 'Isnin',
                                                                            'Selasa' => 'Selasa',
                                                                            'Rabu' => 'Rabu',
                                                                            'Khamis' => 'Khamis',
                                                                            'Jumaat' => 'Jumaat',
                                                                            'Sabtu' => 'Sabtu',
                                                                            'Ahad' => 'Ahad',

                                                                         ], 

                                                                         ['prompt'=>'(Sila Pilih)','id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'day'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'day'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'time',['class'=>'form-control','placeholder'=>'12.00AM']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'time'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'time'); ?></span>
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
                                                                        
                                                                        <?= Html::activeTextInput($model,'nama',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'nama'); ?> <span class="required">*</span></label>
                                                                        <span class="help-block"><?= Html::error($model,'nama'); ?></span>
                                                                        
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
                                                                        
                                                                        <?= Html::activeTextInput($model,'no_kp',['class'=>'form-control','placeholder'=>'Eg. 900907105331']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'no_kp'); ?> <span class="required">*</span></label>
                                                                        <span class="help-block"><?= Html::error($model,'no_kp'); ?></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'jantina',
                                                                         [
                                                                            'Lelaki' => 'Lelaki',
                                                                            'Perempuan' => 'Perempuan',
                                                                         ], 
                                                                         ['prompt'=>'(Sila Pilih)','id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'jantina'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'jantina'); ?></span>
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
                                                                        <?= Html::activeTextArea($model,'alamat',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'alamat'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'alamat'); ?></span>
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
                                                                            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['volunteer/liststate','id'=>'']).'"+$(this).val(), function( data ) {$( "select#state" ).html( data );});',
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
                                                                        'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['volunteer/listdistrict','id'=>'']).'"+$(this).val(), function( data ) {$( "select#district" ).html( data );});',

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
                                                                            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['volunteer/listsubbase','id'=>'']).'"+$(this).val(), function( data ) {$( "select#subbase" ).html( data );});',
                           
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
                                                                            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['volunteer/listcluster','id'=>'']).'"+$(this).val(), function( data ) {$( "select#cluster" ).html( data );});',
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
                                                                            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['volunteer/listkampung','id'=>'']).'"+$(this).val(), function( data ) {$( "select#kampung" ).html( data );});',
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

                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'poskod',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'poskod'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'poskod'); ?></span>
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
                                                                        <?= Html::activeTextInput($model,'tel_hp',['class'=>'form-control','placeholder'=>'011-*********']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'tel_hp'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'tel_hp'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'tel_rumah',['class'=>'form-control','placeholder'=>'03-********']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'tel_rumah'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'tel_rumah'); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="portlet-body form">
                                                            <div class="form-body">

                                                                <div class="col-md-6">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'email',['class'=>'form-control','placeholder'=>'Eg. cypress@gmail.com']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'email'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'email'); ?></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="tab-pane" id="tab2">

                                                <div class="caption font-green-haze">
                                                       
                                                    <span class="caption-subject bold uppercase"> Info</span>
                                                </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Adakah anda terlibat dengan kerja-kerja kesukarelawan ?</p>


                                                                    <div class="col-md-12">
                                                                        <div class="md-radio-inline">
                                                                            <div class="md-radio">
                                                                               
                                                                                    <input type="radio" id="radio53" name="Volunteer[kerja_sukarelawan]" class="md-radiobtn" value="Ya">
                                                                                
                                                                                <label for="radio53">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span>
                                                                                Ya </label>
                                                                            </div>
                                                                           <div class="md-radio">
                                                                                
                                                                                    <input type="radio" id="radio54" name="Volunteer[kerja_sukarelawan]" class="md-radiobtn" value="Tidak" checked="checked">
                      
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

                                                    <div class="row" id="hideshow" style="display:none;">
                                                        <div class="portlet-body form">
                                                            <div class="form-body">

                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'persatuan',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'persatuan'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'persatuan'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'jawatan',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'jawatan'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'jawatan'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeTextInput($model,'tempoh',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'tempoh'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'tempoh'); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" >
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Program Yang Ingin Disertai</p>
                                                                
                                                                <br>

                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_kanak_kanak',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_kanak_kanak'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_kanak_kanak'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_kemasyarakatan',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_kemasyarakatan'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_kemasyarakatan'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_warga_emas',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_warga_emas'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_warga_emas'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_oku',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                            
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_oku'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_oku'); ?></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row" >
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                            

                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'aktiviti_rekreasi',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'aktiviti_rekreasi'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'aktiviti_rekreasi'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_kesihatan',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                            
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_kesihatan'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_kesihatan'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'prog_akademik',
                                                                         [
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'prog_akademik'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'prog_akademik'); ?></span>
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
                                                                        <?= Html::activeTextArea($model,'lain_lain',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'lain_lain'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'lain_lain'); ?></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" >
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Sila nyatakan bahasa yang boleh anda tuturkan</p>
                                                              
                                                                <br>

                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'bahasa_melayu',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'bahasa_melayu'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'bahasa_melayu'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'bahasa_inggeris',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'bahasa_inggeris'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'bahasa_inggeris'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'bahasa_tamil',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'bahasa_tamil'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'bahasa_tamil'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'bahasa_cina',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'bahasa_cina'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'bahasa_cina'); ?></span>
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
                                                                        <?= Html::activeTextArea($model,'lain_lain_2',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'lain_lain_2'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'lain_lain_2'); ?></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                       <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Adakah Anda memiliki kenderaan?</p>
                                                                
                                                                <div class="form-group form-md-line-input">
                                                                    <div class="input-icon right">
                                                                        
                                                                            <div class="col-md-12">
                                                                                <div class="md-radio-inline">
                                                                                    <div class="md-radio">
                                                                                        <input type="radio" id="radio55" name="Volunteer[memiliki_kenderaan]" class="md-radiobtn" value="Ya">
                                                                                        <label for="radio55">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span>
                                                                                        Ya </label>
                                                                                    </div>
                                                                                   <div class="md-radio">
                                                                                        <input type="radio" id="radio56" name="Volunteer[memiliki_kenderaan]" class="md-radiobtn" value="Tidak" checked="checked">
                                                                                        <label for="radio56">
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
                                                        </div>

                                                    </div>

                                                    <div class="row" >
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Waktu ketika diperlukan?</p>
                            
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'bila_bila_masa',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'bila_bila_masa'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'bila_bila_masa'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'setiap_hari',
                                                                         [
                                                                           
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         ['prompt'=>'','id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'setiap_hari'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'setiap_hari'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'cuti_am',
                                                                         [
                                                                          
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'cuti_am'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'cuti_am'); ?></span>
                                                                    </div>
                                                                </div>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" >
                                                        <div class="portlet-body form">
                                                            <div class="form-body">
                                                                <p class="title_h4">Sumbangan yang boleh diberikan</p>
                                                                
                            
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'fasilitator',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'fasilitator'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'fasilitator'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'fotografi',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'fotografi'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'fotografi'); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input">
                                                                        <?= Html::activeDropDownList($model, 'tenaga',
                                                                         [
                                                                            
                                                                            'Tidak' => 'Tidak',
                                                                            'Ya' => 'Ya',
                                                                         ], 
                                                                         [FALSE,'id'=>'form_control_1','class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'tenaga'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'tenaga'); ?></span>
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
                                                                        <?= Html::activeTextArea($model,'lain_lain_3',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'lain_lain_3'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'lain_lain_3'); ?></span>
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
                                                                        <?= Html::activeTextArea($model,'nota_tambahan',['class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'nota_tambahan'); ?></label>
                                                                        <span class="help-block"><?= Html::error($model,'nota_tambahan'); ?></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        
                                        <a href="javascript:;" class="btn default button-previous">
                                        Back </a>
                                        <a href="javascript:;" class="btn blue button-next">
                                        Continue 
                                        </a>
                                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['id'=>'button-submit','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>         
                          
                                    </div>
                                </div>
                          <?php ActiveForm::end(); ?>