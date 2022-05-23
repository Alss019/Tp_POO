<?php
    $bdd = new PDO('mysql:host=localhost;dbname=articles','admin','1234',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>