<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CRUD";
    //Create Connection
$conn = new mysqli($servername,$username,$password,$dbname);
    //Check Connection
if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

    //Create DateBase
$sql = "CREATE DATABASE IF NOT EXISTS CRUD";
if($conn->query($sql)===TRUE){
    echo "";
}else {
    echo "Error Creating Database:". $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS People(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(30) not null,
address varchar(30) not null,
age varchar(5) not null,
contact varchar(15) not null)";

if($conn->query($sql)===TRUE){
    echo "";

}else{
    echo "Failed to add Table".$conn->error;
}



?>