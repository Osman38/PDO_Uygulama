<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=db_kullanici;charset=utf8", "root", "");
    } catch ( PDOException $e ){
        print $e->getMessage();
    }

?>
