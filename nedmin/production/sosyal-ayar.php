<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sosyal Medya Ayarları <small>
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
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_facebook">Facebook</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_facebook'] ?>" name="ayar_facebook" type="text" id="ayar_facebook" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_twitter">Twitter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_twitter'] ?>" name="ayar_twitter" type="text" id="ayar_twitter" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_google">Google</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_google'] ?>" name="ayar_google" type="text" id="ayar_google" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_youtube">Youtube</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_youtube'] ?>" name="ayar_youtube" type="text" id="ayar_youtube" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="sosyalayarkaydet" class="btn btn-success">Güncelle</button>
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