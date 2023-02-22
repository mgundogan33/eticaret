<?php include 'header.php';

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
    'id' => $_GET['kullanici_id']
));
$kullanicicek = $kullanicisor->fetch((PDO::FETCH_ASSOC));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kullanıcı Düzenle <small>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_adsoyad">Ad Soyad</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_adsoyad'] ?>" name="kullanici_adsoyad" type="text" id="kullanici_adsoyad" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_mail">Mail Adresi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_mail'] ?>" name="kullanici_mail" type="mail" id="kullanici_mail" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_gsm">Telefon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_gsm'] ?>" name="kullanici_gsm" type="text" id="kullanici_gsm" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_tc">Tc</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_tc'] ?>" name="kullanici_tc" type="text" id="kullanici_tc" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_adres">Adres</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_adres'] ?>" name="kullanici_adres" type="text" id="kullanici_adres" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_zaman">Kayıt Tarihi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $kullanicicek['kullanici_zaman'] ?>" name="kullanici_zaman" type="text" id="kullanici_zaman" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_durum">Kullanıcı Durum</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="kullanici_durum" id="">
                                        <option class="bg-primary" value="1" <?php echo $kullanicicek['kullanici_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option class="bg-red" value="0" <?php if ($kullanicicek['kullanici_durum'] == 0) {
                                                                                echo 'selected=""';
                                                                            } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
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