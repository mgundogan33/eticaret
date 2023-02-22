<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title-wrap">
                <div class="page-title-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bigtitle">Kullanıcı Kaydı</div>
                            <p>Kullanıcı Kayıt işlemleri aşağıdaki form ile gerçekleştirebilirsiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="nedmin/netting/islem.php" class="form-horizontal checkout" role="form">
        <div class="row">
            <div class="col-md-7">
                <div class="title-bg">
                    <div class="title">Kayıt Bilgileri</div>
                </div>
                <div class="form-group dob">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="kullanici_adsoyad" id="kullanici_adsoyad" placeholder="Ad-Soyad">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="kullanici_tc" id="kullanici_tc" placeholder="Tc Giriniz">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="mail" class="form-control" name="kullanici_mail" id="kullanici_mail" placeholder="Email Giriniz">
                    </div>
                </div>
                <div class="form-group dob">
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="kullanici_passwordone" id="kullanici_passwordone" placeholder="Şifre Giriniz">
                    </div>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="kullanici_passwordtwo" id="kullanici_passwordtwo" placeholder="Şifre Yeniden">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="kullanici_gsm" id="kullanici_gsm" placeholder="Telefon Numarası Giriniz">
                    </div>
                </div>

                <div class="form-group dob">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="kullanici_adres" id="kullanici_adres" placeholder="Adres Giriniz">
                    </div>
                </div>

                <button type="submit" name="kullanicikaydet" class="btn btn-default btn-red">Kayıt OL</button>
            </div>
            <!-- <div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifrenizi mi Unuttunuz?</div>
				</div>


			<img width="400" src="dimg/password.png">
			</div> -->
        </div>
    </form>
    <div class="spacer"></div>
</div>

<?php include 'footer.php' ?>