<?php
    include "koneksi.php";
    $nama_kriteria = $_POST['nama_kriteria'];
    $jenis = $_POST['jenis'];

    var_dump($nama_kriteria);
    $sql = "INSERT INTO `kriteria`(`id_kriteria`, `nama_kriteria`, `jenis`) 
            VALUES (NULL,'$nama_kriteria','$jenis')";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: kriteria.php');
        } else {
            var_dump($a);
        }
    ?>