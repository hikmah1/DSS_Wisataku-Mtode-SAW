<?php
    include "koneksi.php";
    $nilai = $_POST['nilai'];
    $keterangan = $_POST['keterangan'];

    var_dump($nilai);
    $sql = "INSERT INTO `skala`(`id_skala`, `value`, `keterangan`) VALUES (NULL,'$nilai','$keterangan')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: skala.php');
        } else {
            var_dump($a);
        }
    ?>