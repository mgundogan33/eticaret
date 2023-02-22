<?php
include 'nedmin/netting/baglan.php';
include 'nedmin/production/fonksiyon.php';
//  Belirli veriyi seçme işlemi
$ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
    'id' => 1
));
$ayarcek = $ayarsor->fetch((PDO::FETCH_ASSOC));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?= $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?= $ayarcek['ayar_author'] ?>">
    <title><?= $ayarcek['ayar_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- owl Style -->
    <link rel="stylesheet" href="css\owl.carousel.css">
    <link rel="stylesheet" href="css\owl.transitions.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <div class="header"><!--Header -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-4 main-logo">
                        <a href="index.php"><img width="70" src="<?= $ayarcek['ayar_logo'] ?>" alt="logo" class="logo img-responsive"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="pushright">
                            <div class="top">
                                <a href="#" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- yada --</span>Kayıt Ol</a>
                                <div class="regwrap">
                                    <div class="row">
                                        <div class="col-md-6 regform">
                                            <div class="title-widget-bg">
                                                <div class="title-widget">Kullanıcı Giriş</div>
                                            </div>

                                            <form role="form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="username" placeholder="Kullanıcı Mail..">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password" placeholder="Kullanıcı Şifre..">
                                                </div>
                                                <div class="form-group">
                                                    <a href="" class="btn btn-default btn-red btn-sm">Giriş Yap</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title-widget-bg">
                                                <div class="title-widget">Kayıt Ol</div>
                                            </div>
                                            <p>
                                                Yeni kullanıcı? Bir hesap oluşturarak daha hızlı alışveriş yapabilir, bir siparişin durumundan haberdar olabilirsiniz...
                                            </p>
                                            <a href="register.php" class="btn btn-default btn-yellow btn-sm">Kayıt Ol</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="srch-wrap">
                                    <a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="srchwrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="search" class="col-sm-2 control-label">Search</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="search">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashed"></div>
        </div><!--Header -->
        <div class="main-nav"><!--end main-nav -->
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php" class="active">Anasayfa</a>
                                        <div class="curve"></div>
                                    </li>

                                    <?php
                                    $menusor = $db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
                                    $menusor->execute(array(
                                        'durum' => 1
                                    ));

                                    while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <li><a href="<?php
                                                        if (!empty($menucek['menu_url'])) {
                                                            echo $menucek['menu_url'];
                                                        } else {
                                                            echo "sayfa-" . seo($menucek['menu_ad']);
                                                        }
                                                        ?>"><?= $menucek['menu_ad'] ?></a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 machart">
                            <button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Cart</span>|<span class="allprice">$0.00</span></button>
                            <div class="popcart">
                                <table class="table table-condensed popcart-inner">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
                                            </td>
                                            <td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
                                            <td>1X</td>
                                            <td>$138.80</td>
                                            <td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
                                            </td>
                                            <td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
                                            <td>1X</td>
                                            <td>$138.80</td>
                                            <td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
                                            </td>
                                            <td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
                                            <td>1X</td>
                                            <td>$138.80</td>
                                            <td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="sub-tot">Sub-Total : <span>$277.60</span> | <span>Vat (17.5%)</span> : $36.00 </span>
                                <br>
                                <div class="btn-popcart">
                                    <a href="checkout.htm" class="btn btn-default btn-red btn-sm">Checkout</a>
                                    <a href="cart.htm" class="btn btn-default btn-red btn-sm">More</a>
                                </div>
                                <div class="popcart-tot">
                                    <p>
                                        Total<br>
                                        <span>$313.60</span>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- <ul class="small-menu">
                            <li><a href="" class="myacc">My Account</a></li>
                            <li><a href="" class="myshop">Shopping Chart</a></li>
                            <li><a href="" class="mycheck">Checkout</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div><!--end main-nav -->