<?php include 'header.php';

$menusor = $db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(
    'id' => $_GET['menu_id']
));
$menucek = $menusor->fetch((PDO::FETCH_ASSOC));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Menü Ekle <small>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_ad">Menü Ad</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $menucek['menu_ad'] ?>" name="menu_ad" type="text" id="menu_ad" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_detay">Menü Detay</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control col-md-7 col-xs-12" id="editor" required="required" name="menu_detay" type="text" cols="30" rows="10"><?= $menucek['menu_detay'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_url">Menü Url</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $menucek['menu_url'] ?>" name="menu_url" type="text" id="menu_url" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_sira">Menü Sıra</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $menucek['menu_sira'] ?>" name="menu_sira" type="text" id="menu_sira" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_durum">Menü Durum</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="menu_durum" id="">
                                        <option class="bg-primary" value="1" <?php echo $menucek['menu_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                                        <option class="bg-red" value="0" <?php if ($menucek['menu_durum'] == 0) {
                                                                                echo 'selected=""';
                                                                            } ?>>Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'] ?>">

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="menuduzenle" class="btn btn-success">Güncelle</button>
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