<?php
include "../connection.php";
if (isset($_POST["simpan_mobil"])) {
    # menampung data yg dikirim ke dalam variable
    $id_mobil = $_POST["id_mobil"];
    $nomor_mobil = $_POST["nomor_mobil"];
    $merk = $_POST["merk"];
    $jenis = $_POST["jenis"];
    $warna = $_POST["warna"];
    $tahun_pembuatan = $_POST["tahun_pembuatan"];
    $biaya_sewa_per_hari = $_POST["biaya_sewa_per_hari"];

    # manage upload file
    $fileName = $_FILES["image"]["name"]; // file name
    $extension = pathinfo($_FILES["image"]["name"]);
    $ext = $extension["extension"]; // eksetensi file
;
    $image = time()."-".$fileName
    
    # proses upload
    $folderName = "image/$image";
    if (move_uploaded_file($_FILES["image"]["tmp_name"],$folderName)) {
        # proses insert data ke tabel mobil
        $sql = "insert into mobil values
        ('','$nomor_mobil','$merk','$jenis',
        '$warna','$tahun_pembuatan','$biaya_sewa_per_hari','$image')";

        # eksekusi perintah SQL
        mysqli_query($connect, $sql);

        echo "Tambah data mobil berhasil";
        # direct ke halaman list mobil
        header("location:list-mobil.php");
    }
    else{
        echo "Upload file gagal";
    }