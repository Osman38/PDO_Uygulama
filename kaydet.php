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
            "note"              =>$note

    );

    $insert = $db->prepare("INSERT INTO tbl_kisiler SET 
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
");

    $sonuc = $insert->execute($data);

    if ($sonuc)
    {
        echo "Kayıt işlemi başarılı.<a href='list.php'>Listeye Dön</a>";
    }
    else
    {
        echo "Kayıt işlemi gerçekleşmedi..!<a href='kisiekle.php'>Kişi Ekleme Sayfasına Dön</a>";
    }
                          





}

?>
