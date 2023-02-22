<?php include 'header.php';

$slidersor = $db->prepare("SELECT * FROM slider");
$slidersor->execute();
//  while dongusunun ıcıne gıren sorgu
// $slidercek = $slidersor->fetch((PDO::FETCH_ASSOC));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Slider Listeleri</h2>
                        <div><a style="margin-left: 10px;" href="slider-ekle.php" class="btn btn-primary">Slider Ekle</a></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ad</th>
                                    <th>Resim</th>
                                    <th>Url</th>
                                    <th>Sıra</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($slidercek = $slidersor->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $slidercek['slider_id']; ?></td>
                                        <td><?php echo $slidercek['slider_ad']; ?></td>
                                        <td>
                                            <img width="120" src="../../<?php echo $slidercek['slider_resimyol']; ?>" alt="">
                                        </td>
                                        <td><?php echo $slidercek['slider_link']; ?></td>
                                        <td><?php echo $slidercek['slider_sira']; ?></td>
                                        <td>
                                            <form action="../netting/islem.php" method="POST">
                                                <button class="btn btn-<?php echo $slidercek['slider_durum'] == 1 ? "success" : "danger" ?>" type="submit" name="slider_statu" value="<?php echo $slidercek['slider_durum'] == 1 ? "0&" . $slidercek['slider_id'] : "1&" . $slidercek['slider_id'] ?>"><?php echo $slidercek["slider_durum"] == 1 ? "Aktif" : "Pasif" ?></button>
                                            </form>
                                        </td>
                                        <td><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>" class="btn btn-success fa fa-edit"></a>
                                            <a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok" class="btn btn-danger fa fa-trash"></a>
                                        </td>
                                        <input type="hidden" name="eski_slider_resim_sil" value="<?php echo $slidercek['slider_resimyol']; ?>">

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include 'footer.php' ?>