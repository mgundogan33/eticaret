<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>İletişim Ayarlar <small>
                                <?php
                                if (isset($_GET['durum'])) {
                                    if ($_GET['durum'] == 'ok') { ?>
                                        <b style="color:green;">İşlem Başarılı...</b>
                                    <?php  } elseif ($_GET['durum'] == 'no') { ?>
                                        <b style="color:red;">İşlem Başarısız!!!</b>
                                <?php  }
                                } ?>
                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_tel">Telefon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_tel'] ?>" name="ayar_tel" type="text" id="ayar_tel" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_gsm">Telefon Numarası (GSM)</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_gsm'] ?>" name="ayar_gsm" type="text" id="ayar_gsm" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_fax">Fax Numarası</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_fax'] ?>" name="ayar_fax" type="text" id="ayar_fax" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mail">Mail</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_mail'] ?>" name="ayar_mail" type="email" id="ayar_mail" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_ilce">İlce</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_ilce'] ?>" name="ayar_ilce" type="text" id="ayar_ilce" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_il">İl</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_il'] ?>" name="ayar_il" type="text" id="ayar_il" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_adres">Adres</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_adres'] ?>" name="ayar_adres" type="text" id="ayar_adres" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mesai">Mesai</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $ayarcek['ayar_mesai'] ?>" name="ayar_mesai" type="text" id="ayar_mesai" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="iletisimayarkaydet" class="btn btn-success">Güncelle</button>
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