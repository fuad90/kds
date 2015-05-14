<?php

use yii\helpers\Html;
$this->title = 'Lihat';
?>
<span id="volunteerView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
  <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Sukarelawan</h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                   <?= Html::a('Utama', ['site/index']) ?><i class="fa fa-circle"></i>
                </li>
                <li>
                    <?= Html::a('Sukarelawan', ['volunteer/index']) ?><i class="fa fa-circle"></i>
                </li>
                <li class="active">Lihat Maklumat Sukarelawan : <?= strtoupper($model->nama); ?></li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="icon-users font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> Lihat Maklumat Sukarelawan </span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body" >
                            
                                            <div class="form-body">
                                                <h3 class="form-section">Maklumat Sukarelawan</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Nama:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->nama;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>No Kad Pengenalan:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->no_kp;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Jantina:</b></label>
                                                            <div class="col-md-3">
                                                                <span class="view"><?= $model->jantina;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>No Telefon Bimbit:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->tel_hp;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>No Tel Rumah:</b></label>
                                                            <div class="col-md-3">
                                                                <span class="view"><?= $model->tel_rumah;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Email:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->email;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Alamat:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->alamat;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Negeri:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->state_id ? $model->state->state : null ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Daerah:</b></label>
                                                            <div class="col-md-3">
                                                                <span class="view"><?= $model->district_id ? $model->district->district : null ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Sub Base:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->sub_base_id ? $model->subBase->sub_base : null?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Cluster:</b></label>
                                                            <div class="col-md-3">
                                                                <span class="view"><?= $model->cluster_id ? $model->cluster->cluster : null ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Kampung:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->kampung_id ? $model->kampung->kampung : null ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="form-section">Info</h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-5"><b>Adakah anda terlibat dengan kerja-kerja kesukarelawan ?:</b></label>
                                                            <div class="col-md-1"><span class="view"><?= $model->kerja_sukarelawan ?></span></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php if ($model->kerja_sukarelawan == "Ya") { ?>
                                                 <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><b>Persatuan :</b></label>
                                                                <div class="col-md-9">
                                                                    <div class="col-md-1"><span class="view"><?= $model->persatuan ?></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><b>Jawatan :</b></label>
                                                                <div class="col-md-9">
                                                                    <div class="col-md-1"><span class="view"><?= $model->jawatan ?></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><b>Tempoh :</b></label>
                                                                <div class="col-md-9">
                                                                    <div class="col-md-3"><span class="view"><?= $model->tempoh ?></span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                <?php } else {

                                                } ?>
                                                <h4 class="titleview">Program Yang Ingin Disertai</h4>                                          
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program Kanak Kanak:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_kanak_kanak ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program Kemasyarakatan:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_kemasyarakatan ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program Warga Emas:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_warga_emas ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program OKU:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_oku ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Aktiviti Rekreasi:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->aktiviti_rekreasi ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program Kesihatan:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_kesihatan ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Program Akademik:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->prog_akademik ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Lain Lain:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->lain_lain;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <h4 class="titleview">Bahasa yang boleh Di Tuturkan</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Bahasa Melayu:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->bahasa_melayu ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Bahasa Inggeris:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->bahasa_inggeris ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Bahasa Tamil:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->bahasa_tamil ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Bahasa Cina:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->bahasa_cina ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Lain Lain:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->lain_lain_2;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-5"><b>Memiliki Kenderaan?:</b></label>
                                                            <div class="col-md-1"><span class="view"><?= $model->memiliki_kenderaan ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="titleview">Waktu ketika diperlukan</h4>  
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Mingguan:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->bila_bila_masa ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Setiap Hari:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->setiap_hari ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Cuti Am:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->cuti_am ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="titleview">Sumbangan yang boleh diberikan</h4>  
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Fasilitator:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->fasilitator ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Fotografi:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?=  $model->fotografi ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Tenaga:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->tenaga ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Lain Lain:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->lain_lain_3;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><b>Nota:</b></label>
                                                            <div class="col-md-9">
                                                                <span class="view"><?= $model->nota_tambahan;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 

                                            </div>

                        </div>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <!-- END PAGE CONTENT INNER -->
        


        </div>
    </div>
    <!-- END PAGE CONTENT -->
