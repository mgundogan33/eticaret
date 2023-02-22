<?php include 'header.php';

$menusor = $db->prepare("SELECT * FROM menu");
$menusor->execute();
//  while dongusunun ıcıne gıren sorgu
// $menucek = $menusor->fetch((PDO::FETCH_ASSOC));
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Menü Listeleri</h2>
                        <div><a style="margin-left: 10px;" href="menu-ekle.php" class="btn btn-primary">Menü Ekle</a></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menü Ad</th>
                                    <th>Menü Url</th>
                                    <th>Menü Sira</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $menucek['menu_id']; ?></td>
                                        <td><?php echo $menucek['menu_ad']; ?></td>
                                        <td><?php echo $menucek['menu_url']; ?></td>
                                        <td><?php echo $menucek['menu_sira']; ?></td>
                                        <td>
                                            <form action="../netting/islem.php" method="POST">
                                                <button class="btn btn-<?php echo $menucek['menu_durum'] == 1 ? "success" : "danger" ?>" type="submit" name="menu_statu" value="<?php echo $menucek['menu_durum'] == 1 ? "0&" . $menucek['menu_id'] : "1&" . $menucek['menu_id'] ?>"><?php echo $menucek["menu_durum"] == 1 ? "Aktif" : "Pasif" ?></button>
                                            </form>
                                        </td>
                                        <td><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>" class="btn btn-success fa fa-edit"></a>
                                            <a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok" class="btn btn-danger fa fa-trash"></a>
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