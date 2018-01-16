<?php


    if ($_GET)
    {

        $k_name         = $_GET["k_name"];
        $lastname       = $_GET["lastname"];
        $birthday       = $_GET["birthday"];
        $phone          = $_GET["phone"];
        $web            = $_GET["web"];
        $email          = $_GET["email"];
        $facebook       = $_GET["facebook"];
        $twitter        = $_GET["twitter"];
        $googlePlus     = $_GET["googlePlus"];
        $adres          = $_GET["adres"];
        $note           = $_GET["note"];
        $id             = $_GET["id"];



    include "baglanti.php";

        $data = array(
            "k_name"            =>$k_name,
            "lastname"          =>$lastname,
            "birthday"          =>$birthday,
            "phone"             =>$phone,
            "web"               =>$web,
            "email"             =>$email,
            "facebook"          =>$facebook,
            "twitter"           =>$twitter,
            "googlePlus"        =>$googlePlus,
            "adres"             =>$adres,
            "note"              =>$note,
            "id"                =>$id

        );

        $insert = $db->prepare("Update  tbl_kisiler SET 
                                      k_name=:k_name,
                                      lastname=:lastname,
                                      birthday=:birthday,
                                      phone=:phone,
                                      web=:web,
                                      email=:email,
                                      facebook=:facebook,
                                      twitter=:twitter,
                                      googlePlus=:googlePlus,
                                      adres=:adres,
                                      note=:note
                                      WHERE 
                                      id=:id
");

        $sonuc = $insert->execute($data);

        if ($sonuc)
        {
            echo "Güncelleme işlemi başarılı.<a href='list.php'>Listeye Dön</a>";
        }
        else
        {
            echo "Güncelleme işlemi gerçekleşmedi..!<a href='kisiduzenle.php.php'>Kişi Ekleme Sayfasına Dön</a>";
        }






    }

?>
