<?php include 'header.php';

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 1
));
$hakkimizdacek = $hakkimizdasor->fetch((PDO::FETCH_ASSOC));

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hakkımızda Ayarlar <small>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_baslik">Başlık</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $hakkimizdacek['hakkimizda_baslik'] ?>" name="hakkimizda_baslik" type="text" id="hakkimizda_baslik" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="editor">İçerik</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control col-md-7 col-xs-12" id="editor" required="required" name="hakkimizda_icerik" type="text" cols="30" rows="10"><?= $hakkimizdacek['hakkimizda_icerik'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_video">Video</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $hakkimizdacek['hakkimizda_video'] ?>" name="hakkimizda_video" type="text" id="hakkimizda_video" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_misyon">Misyon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $hakkimizdacek['hakkimizda_misyon'] ?>" name="hakkimizda_misyon" type="text" id="hakkimizda_misyon" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hakkimizda_vizyon">Vizyon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $hakkimizdacek['hakkimizda_vizyon'] ?>" name="hakkimizda_vizyon" type="text" id="hakkimizda_vizyon" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="hakkimizdakaydet" class="btn btn-success">Güncelle</button>
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