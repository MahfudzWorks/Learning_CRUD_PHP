<?php

$conn = mysqli_connect("localost", "root", "", "belajar_crud");

if(!$conn){
    die("koneksi gagal: " . mysqli_connect_error());
}

?>