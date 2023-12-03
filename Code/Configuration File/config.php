<?php

$serverName="localhost";
$userName="root";
$password="";
$databaseName="DreamLands";

//creating connection object
$co=new mysqli($serverName,$userName,$password,$databaseName);

//checking connection object successfully created or not
if($co->connect_error){
    die("connection failed: ".$co->connect_error);
}//end if

?>