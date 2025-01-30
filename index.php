<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB STMIK KAPUTAMA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* Body Styling */
body {
    background-color: #f4f4f4;
    color: #333;
}

/* Banner Section */
.banner {
    height: 100vh;
    background: url('ppmb.jpeg') no-repeat center center/cover;
    color: white;
    text-align: center;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.banner .content {
    z-index: 1;
    text-shadow: 0 2px 4px rgba(0,0,0,0.5);
}

.banner h1 {
    font-size: 3rem;
    margin-bottom: 15px;
}

.banner p {
    font-size: 1.2rem;
    margin-bottom: 25px;
}

.btn {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #555;
}

/* Cards Section */
.cards {
    display: flex;
    justify-content: space-around;
    padding: 40px 10px;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    background-color: #2c2f33;
    color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card h2 {
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.card p {
    margin-bottom: 15px;
}

.btn-dark {
    background-color: #23272a;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
}

.btn-dark:hover {
    background-color: #7289da;
}
</style>
<body>
    <div class="banner">
        <div class="content">
            <h1>Welcome to, PMB STMIK KAPUTAMA</h1>
            <p>SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER KAPUTAMA TERAKREDITASI "B" BAN-PT NO. 206/SK/BAN-PT/AKRED/PT/IV/2019</p>
            <a href="register.php" class="btn">Daftar Sekarang</a>
        </div>
    </div>
    <div class="cards">
        <div class="card">
            <h2>Login</h2>
            <p>Login ke akun anda dengan NIK yang telah anda daftarkan.</p>
            <a href="login.php" class="btn-dark"><i class="fa fa-sign-in-alt"></i> Login Admin</a>
        </div>
        <div class="card">
            <h2>Brosur</h2>
            <p>Lihat link brosur di sini.</p>
            <a href="brosur.php" class="btn-dark"><i class="fa fa-file"></i> Lihat Brosur</a>
        </div>
    </div>
</body>
</html>