<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Mesekönyv-kezelő</title>
    
    <style>
body {
  background-image: url('library.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  font-family: 'Red Hat Mono', monospace;
}

h2{
     color: #00334d;
     font-size:2rem;
     padding:120px 400px;
 }
 
 button{
    background-color: #c2d6d6;
    font-size:1.2rem;
    border-radius:5px;
    margin:30px;
   
 
}
 
 a{
     color:#00334d;;
 }
    
 button:hover , button:active{
    background-color: #a3c2c2;
    box-shadow: 0px 2px 5px 0px black;
}
</style>
</head>

<body>

        <h2>Üdv a mesekönyv-kezelő felület főoldalán!

            Az alábbi lehetőségek közül választhatsz:
        </h2>
        <button><a href="hozzaadas.php">könyv hozzáadása</a></button>
        <button><a href="osszes.php"> összes könyv</a></button>
        <button><a href="kereses.php">könyv keresése</a></button>
        <button><a href="update.php">könyv módosítása</a></button>

    </body>

</html>