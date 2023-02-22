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
                        <h2>Menü Ekle</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_ad">Menü Ad</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="menu_ad" type="text" placeholder="Menü Adını Giriniz..." id="menu_ad" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_detay">Menü Detay</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="form-control col-md-7 col-xs-12" id="editor"  name="menu_detay" type="text" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_url">Menü Url</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Menü Url Numarası Giriniz..." name="menu_url" type="text" id="menu_url" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_sira">Menü Sıra</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Menü Sıra Numarası Giriniz..." name="menu_sira" type="text" id="menu_sira" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_durum">Menü Durum</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="menu_durum" id="">
                                        <option value="1" class="bg-primary">Aktif</option>
                                        <option value="0" class="bg-red">Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="menuekle" class="btn btn-success">Kaydet</button>
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