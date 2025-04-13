z<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "localhost";
$database_connect = "electricitybilling";
$username_connect = "root";
$password_connect = "";

// Create connection
$connect = mysqli_connect($hostname_connect, $username_connect, $password_connect, $database_connect);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>