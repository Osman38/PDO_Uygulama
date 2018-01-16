<?php

include "baglanti.php";


$id = $_GET["id"];

$sil = $db->prepare("DELETE FROM tbl_kisiler WHERE  id=:id");

$sil->bindParam("id",$id,PDO::PARAM_INT);
$sonuc = $sil->execute();

    if ($sonuc)
    {
        echo "Silme işlemi başarılı.<a href='list.php'>Listeye Dön</a>";
    }
    else
    {
        echo "Güncelleme işlemi gerçekleşmedi..!<a href='list.php'>Listeye Dön</a>";
    }


?>
