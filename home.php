<?php
    session_start();
    include("config.php");
    
    if (!$_SESSION['user']){
        header("location: index.php");
    }

  $sql_ngambil_user = $conn->query("select * from user where email = '$_SESSION[user]'");
  $user = mysqli_fetch_assoc($sql_ngambil_user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Sederhana</title>
</head>
<body>
    <br>
    <form action="search.php" method="GET">
        <input id="input" type="text" name="search" placeholder="cari...">
        <input id="cari" type="submit" name="submit" value="cari">
    </form>
    <br>
    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>
    
    <div id="wrap">
        <?php 
            include("cari.php");
        ?>
    </div>

    <a href="logout.php">logout</a>
    
    <script src="js.js"></script>
</body>
</html>