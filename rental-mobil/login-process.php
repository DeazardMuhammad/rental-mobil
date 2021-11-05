<?php

session_start();
include "connection.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = sha1($_POST["password"]);

    $sql = "select * from karyawan where
    username='$username' and password='$password'";
    $hasil = mysqli_query($connect, $sql);

    if (mysqli_num_rows($hasil)>0) {
        # login berhasil
        # data disimpan ke dalam session
        $karyawan = mysqli_fetch_array($hasil);
        $_SESSION["karyawan"] = $karyawan;
        header("location:list-sewa.php");
    }else{
        # login gagal
        header("location:login.php");
    }
}