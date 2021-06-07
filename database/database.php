<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "phples";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("connection failed");
}
