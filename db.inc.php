<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "ZZJnxrkMiIr1";
$dBname = "ratingsystem";

// $host = 'localhost';
// $user = 'root';
// $pass = 'ZZJnxrkMiIr1';
// $db_name = '';


$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if(!$conn) {
    die("Connection To Database Failed: ".mysql_connect_error());
}

