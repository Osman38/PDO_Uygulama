<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery-3.2.1.min.js" ></script>


    <title>Kişi Ekleme Formu</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center" class="h3 text-primary">Kişi Ekleme Formu</h3>
        </div>



    </div>

    <div class="row">
        <div class="col-md-4">
            <form method="get" action="kaydet.php">
                <div class="form-group">
                    <label>Ad</label>
                    <input type="text" name="k_name" class="form-control" placeholder="Adınızı Giriniz...">
                </div>

                <div class="form-group">
                    <label >Soyad</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Soyadnızı Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Doğum Tarihi</label>
                    <input type="date" name="birthday" class="form-control" placeholder="Doğum Tarihi Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Telefon Numarası</label>
                    <input type="text" name="phone" class="form-control" placeholder="Telefon Numaranızı Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Web Adresi</label>
                    <input type="text" name="web" class="form-control" placeholder="Web Adresinizi Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Facebook</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook Adresinizi Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Twitter</label>
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter Adresinizi Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Google+</label>
                    <input type="text" name="googlePlus" class="form-control" placeholder="Google+ Adresinizi Giriniz...">
                </div>

                <div class="form-group ">
                    <label >Adres</label>
                    <textarea  rows="3" name="adres" class="form-control" placeholder=" Adresinizi Giriniz..."></textarea>
                </div>

                <div class="form-group ">
                    <label >Önemli Not</label>
                    <textarea  name="note" class="form-control"rows="3" placeholder="Önemli Bir Not Giriniz..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Kaydet</button>
                <a href="list.php" class="btn btn-default pull-left">Listeye Geri Dön</a>
            </form>
        </div>

    </div>
</div>
</body>
</html>
