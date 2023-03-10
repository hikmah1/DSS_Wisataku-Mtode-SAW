<?php
    include "koneksi.php";
    $kriteria = $_POST['kriteria'];
    $value = $_POST['value'];

    var_dump($value);
    $sql = 
    "INSERT INTO `bobot`(`id_bobot`, `id_kriteria`, `value`) VALUES (NULL,$kriteria,$value)";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: bobot.php');
        } else {
            var_dump($a);
        }
    ?>