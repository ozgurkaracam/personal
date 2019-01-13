<?php 
    $server='localhost';
    $username='root';
    $password='';
    $database='kisisel';
    
    $db=mysqli_connect($server,$username,$password,$database);
    mysqli_query($db,"SET NAMES UTF8");
?>