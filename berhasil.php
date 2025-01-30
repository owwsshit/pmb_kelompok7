<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo '<script>alert("ID pendaftaran tidak ditemukan!"); window.location="register.php";</script>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB ONLINE - Pendaftaran Berhasil</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #999;
            color: #333;
        }

        .box-formulir {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        h4 {
            font-size: 18px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .btn-cetak {
            display: inline-block;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-cetak:hover {
            background: #0056b3;
        }

        .box {
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            .box-formulir {
                padding: 15px 20px;
            }

            h2 {
                font-size: 20px;
            }

            h4 {
                font-size: 16px;
            }

            .btn-cetak {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <section class="box-formulir">

        <h2>Pendaftaran Berhasil</h2>
        
        <div class="box">
            <h4>Kode Pendaftaran Anda Adalah <?php echo $_GET['id']; ?></h4>
            <a href="bukti.php?id=<?php echo $_GET['id']; ?>" class="btn-cetak">Cetak Bukti Pendaftaran</a>
        </div>

    </section>
</body>
</html>