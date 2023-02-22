<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Mail Ayarları <small>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtphost">Smtp Host</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_smtphost'] ?>" name="ayar_smtphost" type="text" id="ayar_smtphost" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_user">Smtp User</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_user'] ?>" name="ayar_user" type="text" id="ayar_user" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtppassword">Smtp Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_smtppassword'] ?>" name="ayar_smtppassword" type="text" id="ayar_smtppassword" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_smtpport">Smtp Port</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_smtpport'] ?>" name="ayar_smtpport" type="text" id="ayar_smtpport" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_bakim">Bakim</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_bakim'] ?>" name="ayar_bakim" type="text" id="ayar_bakim" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="mailayarkaydet" class="btn btn-success">Güncelle</button>
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