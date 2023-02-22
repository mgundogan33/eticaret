<?php include 'header.php';

$kullanicisor = $db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();
//  while dongusunun ıcıne gıren sorgu
// $kullanicicek = $kullanicisor->fetch((PDO::FETCH_ASSOC));

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kullanıcı Ayarlar</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Kayıt Tarihi</th>
                                    <th>Ad Soyad</th>
                                    <th>Mail Adresi</th>
                                    <th>Telefon</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $kullanicicek['kullanici_zaman']; ?></td>
                                        <td><?php echo $kullanicicek['kullanici_adsoyad']; ?></td>
                                        <td><?php echo $kullanicicek['kullanici_mail']; ?></td>
                                        <td><?php echo $kullanicicek['kullanici_gsm']; ?></td>
                                        <td>
                                            <form action="../netting/islem.php" method="POST">
                                                <button class="btn btn-<?= $kullanicicek['kullanici_durum'] ==  1 ? 'success' : 'danger' ?>" type="submit" value="<?php echo $kullanicicek['kullanici_durum'] == 1 ? "0&" . $kullanicicek['kullanici_id'] : "1&" . $kullanicicek['kullanici_id'] ?>" name="statu"><?php echo $kullanicicek['kullanici_durum'] == 1 ? "Aktif" : "Pasif" ?></button>
                                            </form>
                                        </td>

                                        <td><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>" class="btn btn-success fa fa-edit"></a>
                                            <a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok" class="btn btn-danger fa fa-trash"></a>
                                        </td>
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