<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">
    <style>
body {
  background-image: url('library.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  font-family: 'Red Hat Mono', monospace;
  padding:20px;
}

h2{
     color: #00334d;
     font-size:2rem;
     padding:50px 400px;
 }
 
 button{
    background-color: #c2d6d6;
    font-size:1.2rem;
    border-radius:5px;
    margin-right:30px;
  margin-left:30px;
}
 
table, th, td {
   
   text-align:center;
   justify-content:center;
   position:center;
   margin:auto;
   padding:auto;
  }

th,td{
   background:rgba(255,255,255, 0.3);
   border: 1px solid;
   margin:auto;
   padding:auto;
}
   


 a{
     color:#00334d;;
 }
 form{
     margin: 60px 200px;;
     display:flex;
 }
 input{
  margin-right:30px;
  margin-left:30px;
  height:2rem;
  width:auto;
}
    
 button:hover , button:active{
    background-color: #a3c2c2;
    box-shadow: 0px 2px 5px 0px black;
}
</style>
<title>Könyv keresése</title>
</head>

<body>

    <button><a href="hozzaadas.php">könyv hozzáadása</a></button>
    <button><a href="osszes.php">összes könyv</a></button>
    <button><a href="update.php">könyv módosítása</a></button>


    <h2>Könyv keresése</h2>

    <form action="kereses.php" method="post">
        <label for="cim">Cím: </label><br>
        <input type="text" id="cim" name="cim"><br>
        <label for="szerző">Szerző: </label><br>
        <input type="text" id="szerzo" name="szerzo">

        <button type="submit" value="submit" name="submit">Keresés</button>
    </form>

    <?php

    if (isset($_POST['submit'])) {
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

        $result = mysqli_query($connection, $query);


        ?>
        <table>
               <th>Sorszám</th>
               <th>Cím</th>
               <th>Szerző(k)</th>
               <th>Oldalszám</th>
               <th>Hozzáadás dátuma</th><tr>
       <?php
        while ($row = mysqli_fetch_assoc($result)) {
         
            $sorszam = $row['sorszám'];
            $cim = $row['cím'];
            $szerzo = $row['szerző'];
            $oldalszam = $row['oldalszám'];
            $datum = $row['dátum'];

            echo "<form action='kereses.php' method='post'><tr>
    <td>$sorszam</td>
    <td>$cim</td>
    <td>$szerzo</td>
    <td>$oldalszam</td>
    <td>$datum</td>
    <td><button type='submit' value='$sorszam' name='update'>Szerkesztés</button></td>
    <td><button type='submit' value='$sorszam' name='delete'>Törlés</button></td>
    </tr>
    <br>
    </form>";
        }
    }
  

if(isset($_POST['delete'])){
    global $connection;

    $delSorszam = $_POST['delete'];
            

    $sorszam = $_POST['sorszam'];
    $cim = $_POST['cim'];
    $szerzo = $_POST['szerzo'];
    $oldalszam = $_POST['oldalszam'];
    $datum = $_POST['datum'];
    

    $query = "DELETE FROM mesekonyvek ";
    $query .= "WHERE sorszám = $delSorszam";

   

    $result = mysqli_query($connection, $query);

    if(!$result){die("A megadott feltételek alapján nincs találat.");}
    else{header("Location: http://localhost/mesekonyv_kezelo/kereses.php");}}




    if (isset($_POST['update'])) {
     header("Location: http://localhost/mesekonyv_kezelo/update.php");}
        
    
        ?>
</body>
</html>