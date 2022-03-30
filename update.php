<?php include "db.php"; ?>
<?php include "functions/modifyfgv.php"; ?>
<?php include "functions/deletefgv.php"; ?>
<?php include "functions/showallfgv.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            background-image: url('library.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Red Hat Mono', monospace;
            padding: 20px;
        }

        h2 {
            color: #00334d;
            font-size: 2rem;
            padding: 50px 400px;
        }

        button {
            background-color: #c2d6d6;
            font-size: 1.2rem;
            border-radius: 5px;
            margin-right: 30px;
            margin-left: 30px;


        }

     
        table, th, td {
   
   text-align:center;
   justify-content:center;
   position:center;
   margin:auto;
   padding:auto;
  }

        a {
            color: #00334d;
            ;
        }

        form {

            display: flex;
        }

        input {

            height: 2rem;
            width: auto;
        }

        button:hover,
        button:active {
            background-color: #a3c2c2;
            box-shadow: 0px 2px 5px 0px black;
        }
    </style>
</head>

<body>
    <button><a href="hozzaadas.php">könyv hozzáadása</a></button>
    <button><a href="osszes.php"> összes könyv</a></button>
    <button><a href="kereses.php">könyv keresése</a></button>



    <h2>Könyvek módosítása</h2>

    <?php
    $query = "SELECT * FROM mesekonyvek";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed");
    }

    ?>



    <table>
        <th>Sorszám</th>
        <th>Cím</th>
        <th>Szerző(k)</th>
        <th>Oldalszám</th>
        <th>Hozzáadás dátuma</th>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $sorszam = $row['sorszám'];
            $cim = $row['cím'];
            $szerzo = $row['szerző'];
            $oldalszam = $row['oldalszám'];
            $datum = $row['dátum'];

            echo "<form action='update.php' method='post'><tr>
    <td><input value='$sorszam' name='sorszam'></td>
    <td><input value='$cim' name='cim'></td>
    <td><input value='$szerzo' name='szerzo'></td>
    <td><input value='$oldalszam' name='oldalszam'></td>
    <td><input value='$datum' name='datum'></td>
    <td><button type='submit' value='$sorszam' name='update'>Módosít</button></td>
    <td><button type='submit' value='$sorszam' name='delete'>Törlés</button></td>
    </tr>";
        }
        ?>
        <?php
        if (isset($_POST['update'])) {
            $updateSorszam = $_POST['update'];
            echo $updateSorszam;

            $sorszam = $_POST['sorszam'];
            $cim = $_POST['cim'];
            $szerzo = $_POST['szerzo'];
            $oldalszam = $_POST['oldalszam'];
            $datum = $_POST['datum'];

            $query2 = "UPDATE mesekonyvek SET cím='$cim', szerző='$szerzo', oldalszám=$oldalszam WHERE sorszám=$updateSorszam";

            $resultModified = mysqli_query($connection, $query2);

            if (!$resultModified) {
                die("Query failed");
            } else {
                header("Location: http://localhost/mesekonyv_kezelo/update.php");
            }
        }


        if(isset($_POST['delete'])){
            
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
    else{header("Location: http://localhost/mesekonyv_kezelo/update.php");
    ;}
        }



        ?>
    </table>


</body>

</html>