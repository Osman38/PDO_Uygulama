<?php

    include_once "baglanti.php";

    $rows = $db ->query("SELECT * FROM tbl_kisiler",PDO::FETCH_ASSOC);

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery-3.2.1.min.js" ></script>


    <title>PDO Uygulaması</title>
</head>
<body>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 align="center" class="h3 text-primary">Kişiler Listesi</h3>


                        <a href="kisiekle.php" class="btn btn-success">Yeni Kişi Ekle</a>


                    <br>
                    <br>


                 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                        <table class="table table-striped table-bordered  table-hover">
                            <thead>
                            <th>ID</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Doğum Tarihi</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Web</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Google+</th>
                            <th>Adres</th>
                            <th>Sil</th>
                            <th>Güncelle</th>
                            </thead>
                            <tbody>
                            <?php foreach ($rows as $row){ ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["k_name"]; ?></td>
                                <td><?php echo $row["lastname"]; ?></td>
                                <td><?php echo $row["birthday"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["web"]; ?></td>
                                <td><?php echo $row["facebook"]; ?></td>
                                <td><?php echo $row["twitter"]; ?></td>
                                <td><?php echo $row["googlePlus"]; ?></td>
                                <td><?php echo $row["adres"]; ?></td>
                                <td>
                                    <a href="sil.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Sil</a>
                                <td>
                                    <a href="kisiduzenle.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Güncelle</a> </td>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        




</body>
</html>
