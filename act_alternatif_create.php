<?php
    include "koneksi.php";
    $nama_alternatif = $_POST['nama_alternatif'];
   

    var_dump($nama_alternatif);
    $sql = "INSERT INTO `alternatif`(`id_alternatif`, `nama_alternatif`) VALUES (NULL,'$nama_alternatif')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: alternatif.php');
        } else {
            var_dump($a);
        }
    ?>