<?php
$username="root";
$servername="localhost";
$password="";
$dbname="db3";
$conn=mysqli_connect($servername,$username,$password,$dbname);
mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'db3');
?>