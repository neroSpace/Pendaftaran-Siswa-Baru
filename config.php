<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "psb";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Connection to Database Failed: ". mysqli_connect_error());
}
?>