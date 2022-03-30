<?php

include "./db.php";


function showAll()
{
    global $connection;
    $query = "SELECT * FROM mesekonyvek";
    global $result;

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
        <th>Hozzáadás dátuma</th><tr>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
        $sorszam = $row['sorszám'];
        $cim = $row['cím'];
        $szerzo = $row['szerző'];
        $oldalszam = $row['oldalszám'];
        $datum = $row['dátum'];

        echo "<form action='update.php' method='post'>
       
        <td><input value='$sorszam' name='sorszam'></td>
        <td><input value='$cim' name='cim'></td>
        <td><input value='$szerzo' name='szerzo'></td>
        <td><input value='$oldalszam' name='oldalszam'></td>
        <td><input value='$datum' name='datum'></td>
        <td><button type='submit' value='$sorszam' name='update'>Módosít</button></td>
        <td><button type='submit' value='$sorszam' name='delete'>Törlés</button></td>
        </tr>";
    }
} ?>
    </table>