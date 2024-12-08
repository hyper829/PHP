<?php
session_start();

if(!isset($_SESSION['userid'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
<body> 
<nav class="navbar">
        <div class="logo">Logo</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="toggle-button" id="toggle-button">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <h1>Halaman Home</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
</body>
</html>