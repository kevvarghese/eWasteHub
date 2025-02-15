<?php

$host="localhost";
$user="root";
$pass="";
$db="ewh";
$connection=new mysqli($host,$user,$pass,$db);
if($connection->connect_error){
    echo "Failed to connect DB".$connection->connect_error;
}


?>