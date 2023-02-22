<?php include 'header.php';


?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Slider Ekle</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_resimyol-name">Resim Seç<span class=" ">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_adi">Slider Ad</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Slider Link Giriniz..." name="slider_ad" type="text" id="slider_adi" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_link">Slider Link</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Slider Link Giriniz..." name="slider_link" type="text" id="slider_link" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_sira">Slider Sıra</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Slider Sıra Numarası Giriniz..." name="slider_sira" type="text" id="slider_sira" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_durum">Slider Durum</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="slider_durum">
                                        <option value="1" class="bg-primary">Aktif</option>
                                        <option value="0" class="bg-red">Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="sliderekle" class="btn btn-success">Kaydet</button>
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