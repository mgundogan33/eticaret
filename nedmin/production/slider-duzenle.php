<?php include 'header.php';

$slidersor = $db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array(
    'id' => $_GET['slider_id']
));
$slidercek = $slidersor->fetch((PDO::FETCH_ASSOC));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Slider Düzenle</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_resimyol-name">Resim Seç </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_resimyol-name">Mevcut Resim </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img width="100" src="../../<?= $slidercek['slider_resimyol'] ?>" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_adi">Slider Ad</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $slidercek['slider_ad'] ?>" name="slider_ad" type="text" id="slider_adi" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_link">Slider Link</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $slidercek['slider_link'] ?>" name="slider_link" type="text" id="slider_link" class="form-control col-md-7 col-xs-12">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_sira">Slider Sıra</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $slidercek['slider_sira'] ?>" name="slider_sira" type="text" id="slider_sira" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_durum">slider Durum</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="slider_durum" id="">
                                        <option value="1" class="bg-primary">Aktif</option>
                                        <option value="0" class="bg-red">Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'] ?>">
                            <input type="hidden" name="eski_slider_resim" value="<?php echo $slidercek['slider_resimyol']; ?>">
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="sliderduzenle" class="btn btn-success">Kaydet</button>
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