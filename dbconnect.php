<?php

$hostName="localhost";
$user="root";
$pass="Imnayeon1995";
$dbName="product";
$connect=mysqli_connect($hostName, $user, $pass, $dbName) or die("Can't connect")
echo"Connection succesful"
mysqli_set_charset($connect,"utf8");