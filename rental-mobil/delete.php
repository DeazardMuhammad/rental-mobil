<?php
include './connection.php';

$id_anggota = $_GET['id_anggota'];
// echo $id_anggota;

//memberikan perintah sql
$sql = "delete form anggota where id = '".$id_anggota."'";


$result = mysqli_query($connect, $sql);

if($result){
    header('location:list-anggota.php');
}else{
    printf('Gagal'.mysqli_error($connect));
    exit();
}