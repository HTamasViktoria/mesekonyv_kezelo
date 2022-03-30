<?php

include "./db.php";

function creating(){

    global $connection;
    
    if(isset($_POST['submit'])){
        $cim = $_POST['cim'];
        $szerzo = $_POST['szerzo'];
        $oldalszam = $_POST['oldalszam'];

if(!$szerzo || !$cim || !$oldalszam){die("Kérlek, adj meg minden adatot!");}

  $query = "INSERT INTO mesekonyvek(cím,szerző,oldalszám)";
  $query .= "VALUES('$cim','$szerzo','$oldalszam')";

  $result = mysqli_query($connection,$query);

  if(!$result){die("Query failed");
}else{
    echo "Könyv sikeresen hozzáadva.";
}

    }}