<?php
$servername="localhost";
$username="root";
$password="";
$dbname="j2_php";

$conn=new mysqli($servername,$username,$password,$dbname);

if (!$conn) {
    echo "db not connected";
}


?>