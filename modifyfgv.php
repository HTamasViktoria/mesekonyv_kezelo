<?php

include "./db.php";




function modifying(){

global $connection;


            $updateSorszam = $_POST['update'];
            

            $sorszam = $_POST['sorszam'];
            $cim = $_POST['cim'];
            $szerzo = $_POST['szerzo'];
            $oldalszam = $_POST['oldalszam'];
            $datum = $_POST['datum'];

            $query2 = "UPDATE mesekonyvek SET cím='$cim', szerző='$szerzo', 
            oldalszám=$oldalszam, dátum=$datum WHERE sorszám=$updateSorszam";

            $resultModified = mysqli_query($connection, $query2);

           if(!$resultModified){die("Updating query failed");}else{
            header("Location: http://localhost/mesekonyv_kezelo/update.php");
           }
                
            
        }