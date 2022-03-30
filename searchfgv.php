<?php

include "./db.php";

function searching(){

    global $connection;

 $cim = $_POST['cim'];
 $szerzo = $_POST['szerzo'];

 global $query;

 if (!$cim && $szerzo) {
     $query = "SELECT * FROM mesekonyvek ";
     $query .= "WHERE szerző = '$szerzo'";
 }

 if (!$szerzo && $cim) {
     $query = "SELECT * FROM mesekonyvek ";
     $query .= "WHERE cím = '$cim'";
 }

 if(!$szerzo && !$cim){
     echo("Adjon meg legalább egy keresési feltételt!");
 }
global $result;
 $result = mysqli_query($connection, $query);}
