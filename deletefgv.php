<?php

include "./db.php";


function deleting(){

    global $connection;

    $delSorszam = $_POST['delete'];
            

    $sorszam = $_POST['sorszam'];
    $cim = $_POST['cim'];
    $szerzo = $_POST['szerzo'];
    $oldalszam = $_POST['oldalszam'];
    $datum = $_POST['datum'];
    

    $query = "DELETE FROM mesekonyvek ";
    $query .= "WHERE sorszám = $delSorszam";

    global $result;

    /*$result = mysqli_query($connection, $query);
    if(!$result){die("A megadott feltételek alapján nincs találat.");}
    else{header("Location: http://localhost/mesekonyv_kezelo/update.php");
    ;}*/

}