<?php
include 'koneksi.php';

// Periksa apakah ID diberikan melalui GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Escape ID untuk mencegah SQL Injection
    $id_pendaftaran = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Konfirmasi penghapusan
    if (isset($_POST['confirm_delete'])) {
        $delete = mysqli_query($conn, "DELETE FROM tbl_pendaftaran WHERE id_pendaftaran = '$id_pendaftaran'");
        if ($delete) {
            echo '<script>alert("Data berhasil dihapus!"); window.location="datapeserta.php";</script>';
        } else {
            echo '<script>alert("Data gagal dihapus!"); window.location="datapeserta.php";</script>';
        }
    }
} else {
    echo '<script>alert("ID tidak ditemukan!"); window.location="datapeserta.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data - PMB ONLINE</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: #0056a8;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 30px;
            font-size: 16px;
            color: #555;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-delete {
            background-color: #0056a8;
            color: white;
        }

        .btn-delete:hover {
            background-color: #0056a8;
        }

        .btn-cancel {
            background-color: #f0f0f0;
            color: #555;
        }

        .btn-cancel:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Penghapusan</h2>
        <p>Apakah Anda yakin ingin menghapus data dengan ID Pendaftaran <strong><?php echo htmlspecialchars($id_pendaftaran, ENT_QUOTES, 'UTF-8'); ?></strong>?</p>
        <form method="POST">
            <button type="submit" name="confirm_delete" class="btn btn-delete">Hapus</button>
            <a href="datapeserta.php" class="btn btn-cancel">Batal</a>
        </form>
    </div>
</body>
</html>
