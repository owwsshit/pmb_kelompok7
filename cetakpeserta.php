<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Peserta</title>
    <script>
        window.print();
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Laporan Calon Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pendaftaran</th>
                    <th>Tahun Ajaran</th>
                    <th>Jurusan</th>
                    <th>Nama</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat Peserta</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran");
                while ($row = mysqli_fetch_assoc($peserta)) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['th_ajaran'] ?></td>
                        <td><?php echo $row['jurusan'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['tempat_lahir'].', '.$row['tgl_lahir'] ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td><?php echo $row['agama'] ?></td>
                        <td><?php echo $row['almt_peserta'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['no_hp'] ?></td>
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</body>
</html>
<div style="text-align: center; margin-bottom: 20px;">
    <a href="beranda.php" class="btn-back">Kembali ke Beranda</a>
</div>
<style>
     body {
         font-family: 'Quicksand', sans-serif;
         background-color: #999;
         margin: 0;
         padding: 0;
     }
     .container {
         width: 90%;
         margin: 20px auto;
         background-color: #ffffff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
     }
     h2 {
         text-align: center;
         color: #333;
         margin-bottom: 20px;
     }
     table {
         width: 100%;
         border-collapse: collapse;
         margin: 20px 0;
         text-align: left;
     }
     th, td {
         padding: 12px;
         border: 1px solid #ddd;
     }
     th {
         background-color: #0056a8;
         color: white;
     }
     tr:nth-child(even) {
         background-color: #f2f2f2;
     }
     tr:hover {
         background-color: #ddd;
     }
     td {
         font-size: 14px;
         color: #555;
     }
     @media print {
         body {
             font-size: 12px;
         }
         .container {
             width: 100%;
             margin: 0;
             padding: 10px;
             box-shadow: none;
         }
         table {
             margin: 0;
         }
     }
 </style>


