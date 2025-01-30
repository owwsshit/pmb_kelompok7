<?php
include 'koneksi.php';

$peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '" .$_GET['id']."' ");
$p = mysqli_fetch_object($peserta);
?>
<body>
    <div class="container">
        <h2>Bukti Pendaftaran</h2>
        <table>
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo ($p->id_pendaftaran ?? '');  ?></td>
            </tr>
            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td><?php echo ($p->th_ajaran ?? ''); ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo ($p->nm_peserta ?? ''); ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo ($p->tempat_lahir ?? '') . ' ' . ($p->tgl_lahir ?? ''); ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo ($p->jenis_kelamin ?? ''); ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo ($p->agama ?? ''); ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td><?php echo ($p->almt_peserta ?? ''); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo ($p->email ?? ''); ?></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td><?php echo ($p->no_hp ?? ''); ?></td>
            </tr>
        </table>
        <body>
        <div class="container">
        <a href="javascript:window.print()" class="btn-print">Cetak Bukti Pendaftaran</a>
        <a href="index.php" class="btn-back">Kembali ke Halaman Utama</a>
        </div>
        </body>
        </div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - PMB ONLINE</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #999;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ddd;
        }

        table td:first-child {
            font-weight: bold;
            color: #555;
            width: 30%;
        }

        table td:nth-child(2) {
            width: 5%;
            text-align: center;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        .btn-print {
            display: block;
            margin: 20px auto;
            text-align: center;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-print:hover {
            background: #0056b3;
        }
    </style>
</head>