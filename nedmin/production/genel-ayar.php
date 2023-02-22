<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Genel Ayarlar <small>
                                <?php
                                if (isset($_GET['durum'])) {
                                    if ($_GET['durum'] == 'ok') { ?>
                                        <b style="color:green;">İşlem Başarılı...</b>
                                    <?php  } elseif ($_GET['durum'] == 'no') { ?>
                                        <b style="color:red;">İşlem Başarısız!!!</b>
                                <?php  }
                                }  ?>
                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                    if (strlen($ayarcek['ayar_logo']) > 0) { ?>
                                        <img width="150" src="../../<?php echo $ayarcek['ayar_logo']; ?>">
                                    <?php } else { ?>
                                        <img width="150" src="../../dimg/logoyok.png">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="ayar_logo" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">
                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                            </div>
                        </form>



                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_title">Site Başlığı</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_title'] ?>" name="ayar_title" type="text" id="ayar_title" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_description">Site Açıklaması</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_description'] ?>" name="ayar_description" type="text" id="ayar_description" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Site Anahtar Kelime</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_keywords'] ?>" name="ayar_keywords" type="text" id="ayar_keywords" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_author">Site Yazar</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_author'] ?>" name="ayar_author" type="text" id="ayar_author" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include 'footer.php' ?>