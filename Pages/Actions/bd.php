<?php

session_start();

$host = "107.180.57.14:3306";
$user = "i6730128_wp4";
$pass = "Z.cVOJWZwfX5jqkw8ct10";
$bd = "i6730128_wp4";

//conexion bd

$conn = new mysqli($host,$user,$pass,$bd);

if($conn->connect_error){
   die('Error en la conexion '. $conn->connect_error);
}

?>