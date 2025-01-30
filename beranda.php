<?php
    session_start();
    include 'koneksi.php';
?>
<body>
    <header>
        <h1><a href="beranda.php">Admin PMB</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="datapeserta.php">Data Mahasiswa</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <section class="content">
        <h2>Data Mahasiwa</h2>
        <div class="box">
            <h3>Selamat Datang di PMB Online.</h3>
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB ONLINE ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }
        body {
            background-color: #999;
            color: #333;
        }
        header {
            background: #0056a8;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 a {
            color: white;
            text-decoration: none;
        }
        header ul {
            list-style: none;
            display: flex;
        }
        header ul li {
            margin: 0 10px;
        }
        header ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }
        header ul li a:hover {
            background: white;
            color: #0056a8;
        }
        .content {
            padding: 20px;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #0056a8;
            margin-bottom: 20px;
        }
        h3 {
            color: #333;
            margin-bottom: 10px;
        }
    </style>
</head>