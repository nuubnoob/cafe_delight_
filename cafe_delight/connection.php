<?php
$server='localhost';
$username='root';
$password='';
$database='cafe_delight';

$con=mysqli_connect($server,$username,$password,$database);

if($con){
    echo 'succ';
}