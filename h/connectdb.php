<?php
$conn = mysqli_connect("localhost","jirapa_user","1234","4002db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>