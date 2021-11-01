<?php
include("connection.php");
if (isset($_POST["simpan_pelanggan"])) {
    # proses insert new data
    //tampung data input pelanggan dari usser 
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat_pelanggan = $_POST["alamat_pelanggan"];
    $kontak = $_POST["kontak"];

    //membuat perintah SQL utk insert data ke tabel pelanggan
    $sql ="insert into pelanggan values ('$id_pelanggan', '$nama_pelanggan', '$alamat_pelanggan', '$kontak')";
    
    //eksekusi perintah SQL
    mysqli_query($connect, $sql);

    //direct ke halaman list pelanggan
    header("location:list-pelanggan.php");
}
if (isset($_POST["edit_pelanggan"])) {
    #tampung data yg akan diupdate
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat_pelanggan = $_POST["alamat_pelanggan"];
    $kontak = $_POST["kontak"];
    # perintah SQL update ke table pelanggan 
    $sql = "update pelanggan set nama_pelanggan ='$nama_pelanggan',
    alamat_pelanggan ='$alamat_pelanggan',kontak='$kontak' where id_pelanggan='$id_pelanggan'";

    # eksekusi perintah SQL
    mysqli_query($connect, $sql);

    //direct ke halaman list pelanggan
    header("location:list-pelanggan.php");
}
?>  