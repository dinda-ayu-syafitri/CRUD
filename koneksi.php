<?php

// DEKLARASIIN VARIABEL
$host = "localhost";
$user = "root";
$pass = "";
$database = "project_spnj";

//Connect 
$conn = mysqli_connect($host,$user,$pass,$database);

if(mysqli_connect_errno()){
    echo "Koneksi Gagal : ".mysqli_connect_error();
}

?>