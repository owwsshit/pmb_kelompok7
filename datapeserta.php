<?php
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB ONLINE ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
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
        /* Print Styling */
        @media print {
            body {
                background-color: white;
                color: black;
            }
            header, footer {
                display: none; /* Hide header and footer on print */
            }
            .content {
                padding: 1rem;
                max-width: 100%;
                box-shadow: none;
            }
            .table {
                border-collapse: collapse;
                width: 100%;
            }
            .table thead {
                background-color: #0056a8;
                color: white;
            }
            .table th, .table td {
                padding: 0.5rem;
                border: 1px solid #ddd;
            }
            .action-btn {
                display: none; /* Hide action buttons in print view */
            }
            .box {
                text-align: right;
            }
            .box a {
                display: none; /* Hide print link during print */
            }
        }
    </style>
</head>
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
        <h2>Data Mahasiswa</h2>
        <div class="box">
            <a href="cetakpeserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran");
                    while ($row = mysqli_fetch_assoc($peserta)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['id_pendaftaran'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($row['nm_peserta'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($row['jenis_kelamin'], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td><a href='detailpeserta.php?id=" . $row['id_pendaftaran'] . "' class='action-btn'>Detail</a> ";
                        echo "<a href='hapuspeserta.php?id=" . $row['id_pendaftaran'] . "' class='action-btn' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Hapus</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
