<?php
    include "koneksi.php";
    $id_alternatif = $_POST['id_alternatif'];
    $id_bobot = $_POST['id_bobot'];
    $id_skala = $_POST['id_skala'];
    

    var_dump($id_alternatif);
    $sql = 
    "INSERT INTO `matrixkeputusan`(`id_matrix`, `id_alternatif`, `id_bobot`, `id_skala`) 
    VALUES (NULL,$id_alternatif,$id_bobot,$id_skala)";
    $a = $koneksi->query($sql);
        if ($a === true) {
            header('location: matrix.php');
        } else {
            var_dump($a);
        }
    ?>