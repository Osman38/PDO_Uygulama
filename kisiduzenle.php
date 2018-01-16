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


    <title>Kişi Bilgileri Düzenleme Formu</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 align="center" class="h3 text-primary">Kişi Bilgileri Düzenleme Formu</h3>
        </div>
        <?php

            include ("baglanti.php");
            $id = $_GET["id"];

            $select = $db->prepare("SELECT * FROM tbl_kisiler WHERE id=:id");
            $select->bindParam("id",$id,PDO::PARAM_INT);
            $select->execute();
            $row = $select->fetch(PDO::FETCH_ASSOC);

        ?>


    </div>

    <div class="row">
        <div class="col-md-4">
            <form method="get" action="edit.php">
                <div class="form-group">
                    <label>Ad</label>
                    <input type="text" name="k_name" class="form-control" placeholder="Adınızı Giriniz..." value="<?php echo $row["k_name"]; ?>">
                </div>

                <div class="form-group">
                    <label >Soyad</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Soyadnızı Giriniz..." value="<?php echo $row["lastname"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Doğum Tarihi</label>
                    <input type="date" name="birthday" class="form-control" placeholder="Doğum Tarihi Giriniz..." value="<?php echo $row["birthday"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Telefon Numarası</label>
                    <input type="text" name="phone" class="form-control" placeholder="Telefon Numaranızı Giriniz..." value="<?php echo $row["phone"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Web Adresi</label>
                    <input type="text" name="web" class="form-control" placeholder="Web Adresinizi Giriniz..." value="<?php echo $row["web"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Giriniz..." value="<?php echo $row["email"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Facebook</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook Adresinizi Giriniz..." value="<?php echo $row["facebook"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Twitter</label>
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter Adresinizi Giriniz..." value="<?php echo $row["twitter"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Google+</label>
                    <input type="text" name="googlePlus" class="form-control" placeholder="Google+ Adresinizi Giriniz..." value="<?php echo $row["googlePlus"]; ?>">
                </div>

                <div class="form-group ">
                    <label >Adres</label>
                    <textarea  rows="3" name="adres" class="form-control" placeholder=" Adresinizi Giriniz..." ><?php echo $row["adres"]; ?></textarea>
                </div>

                <div class="form-group ">
                    <label >Önemli Not</label>
                    <textarea  name="note" class="form-control"rows="3" placeholder="Önemli Bir Not Giriniz..." ><?php echo $row["note"]; ?></textarea>
                </div>

                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                <button type="submit" class="btn btn-success pull-right">Güncelle</button>
                <a href="list.php" class="btn btn-default pull-left">Listeye Geri Dön</a>
            </form>
        </div>

    </div>
</div>
</body>
</html>
