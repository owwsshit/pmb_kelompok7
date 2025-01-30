<?php
    session_start();
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran Where id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB ONLINE ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<style>
     body {
         font-family: 'Quicksand', sans-serif;
         margin: 0;
         padding: 0;
         background-color: #999;
     }
     header {
         background-color: #0056a8;
         color: white;
         padding: 1rem;
         text-align: center;
     }
     header h1 a {
         text-decoration: none;
         color: white;
     }
     header ul {
         list-style: none;
         padding: 0;
         margin: 0;
         display: flex;
         justify-content: center;
         gap: 1rem;
     }
     header ul li a {
         color: white;
         text-decoration: none;
         font-weight: bold;
     }
     header ul li a:hover {
         text-decoration: underline;
     }
     .content {
         padding: 2rem;
         max-width: 1200px;
         margin: auto;
         background-color: white;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
     }
     h2 {
         text-align: center;
         margin-bottom: 1rem;
         color: #333;
     }
     .table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 1rem;
     }
     .table thead tr {
         background-color: #0056a8;
         color: white;
     }
     .table th, .table td {
         padding: 0.75rem;
         text-align: left;
         border: 1px solid #ddd;
     }
     .table tbody tr:nth-child(even) {
         background-color: #f9f9f9;
     }
     .table tbody tr:hover {
         background-color: #f1f1f1;
     }
     .action-btn {
         text-decoration: none;
         color: white;
         background-color: #0056a8;
         padding: 0.5rem 0.75rem;
         border-radius: 5px;
         font-size: 0.9rem;
     }
     .action-btn:hover {
         background-color: #003d7a;
     }
 </style>
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
        <h2>Detail Mahasiswa</h2>
        <div class="box">
        <table>
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo ($p->id_pendaftaran ?? ''); ?></td>
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
                <td><?php echo ($p->tempat_lahir ?? '') . ', ' . ($p->tgl_lahir ?? ''); ?></td>
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
                <td><?php echo ($p->no_hp ?? ''); ?></td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>:</td>
                <td><?php echo ($p->email ?? ''); ?></td>
            </tr>
            <tr>
                <td>KTP</td>
                <td>:</td>
                <td><a href="dokumen/ktp/<?php echo urlencode($p->ktp); ?>" target="_blank">Lihat KTP</a>
            </tr>
            <tr>
                <td>KK</td>
                <td>:</td>
                <td><a href="dokumen/kk/<?php echo urlencode($p->kk); ?>" target="_blank">Lihat KK</a>
            </tr>
            <tr>
                <td>Ijazah</td>
                <td>:</td>
                <td><a href="dokumen/ijazah/<?php echo ($p->ijazah ?? ''); ?>" target="_blank">Lihat Ijazah</a></td>
            </tr>
            <tr>
                <td>SKL</td>
                <td>:</td>
                <td><a href ="dokumen/skl/<?php echo ($p->skl ?? ''); ?>" target="_blank">Lihat SKL</a></td>
            </tr>
            <tr>
                <td>Pas Foto</td>
                <td>:</td>
                <td><a href="dokumen/pas_foto/<?php echo ($p->pas_foto ?? ''); ?>" target="_blank">Lihat Pas Foto</a></td>
            </tr>
        </table>
        </div>
    </section>
</body>
</html>