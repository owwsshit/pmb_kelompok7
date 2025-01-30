<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tbl_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = sprintf("%05s", $d->id + 1); // Hanya menghasilkan angka
    if(isset($_FILES['ktp'])){
        $rand = rand(10,100);
        $allowed =  array('gif','png','jpg','jpeg','pdf');
        $filename = $_FILES['ktp']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            // Kalau kode nya tidak format gambar masukin kode nya disini
        }else{
            $ktp = $rand.'.'.$ext;
            move_uploaded_file($_FILES['ktp']['tmp_name'], './dokumen/ktp/'.$ktp);
        }
    }
    if(isset($_FILES['pas_foto'])){
        $rand = rand(10,100);
        $allowed =  array('gif','png','jpg','jpeg','pdf');
        $filename = $_FILES['pas_foto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            // Kalau kode nya tidak format gambar masukin kode nya disini
        }else{
            $pas_foto = $rand.'.'.$ext;
            move_uploaded_file($_FILES['pas_foto']['tmp_name'], './dokumen/pas_foto/'.$pas_foto);
        }
    }
    if(isset($_FILES['kk'])){
        $rand = rand(10,100);
        $allowed =  array('gif','png','jpg','jpeg','pdf');
        $filename = $_FILES['kk']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            // Kalau kode nya tidak format gambar masukin kode nya disini
        }else{
            $kk = $rand.'.'.$ext;
            move_uploaded_file($_FILES['kk']['tmp_name'], './dokumen/kk/'.$kk);
        }
    }
    if(isset($_FILES['skl'])){
        $rand = rand(10,100);
        $allowed =  array('pdf');
        $filename = $_FILES['skl']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            // Kalau kode nya tidak format gambar masukin kode nya disini
        }else{
            $skl = $rand.'.'.$ext;
            move_uploaded_file($_FILES['skl']['tmp_name'], './dokumen/skl/'.$skl);
        }
    }
    if(isset($_FILES['ijazah'])){
        $rand = rand(10,100);
        $allowed =  array('pdf');
        $filename = $_FILES['ijazah']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            // Kalau kode nya tidak format gambar masukin kode nya disini
        }else{
            $ijazah = $rand.'.'.$ext;
            move_uploaded_file($_FILES['ijazah']['tmp_name'], './dokumen/ijazah/'.$ijazah);
        }
    }
    $insert = mysqli_query($conn, "INSERT INTO tbl_pendaftaran (
        id_pendaftaran, tgl_daftar, th_ajaran, jurusan, nm_peserta, tempat_lahir, 
        tgl_lahir, jenis_kelamin, agama, almt_peserta, email, no_hp, pas_foto, ktp, kk, ijazah, skl
    ) VALUES (
        '".$generateId."', 
        '".date('Y-m-d')."', 
        '".$_POST['th_ajaran']."', 
        '".$_POST['jurusan']."', 
        '".$_POST['nm']."', 
        '".$_POST['tmp_lahir']."', 
        '".$_POST['tgl_lahir']."', 
        '".$_POST['jk']."', 
        '".$_POST['agama']."', 
        '".$_POST['alamat']."', 
        '".$_POST['email']."', 
        '".$_POST['no_hp']."', 
        '".$pas_foto."', 
        '".$ktp."', 
        '".$kk."', 
        '".$ijazah."', 
        '".$skl."'
    )");
    
    if($insert){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
    }else{
        echo 'koneksi gagal'.mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
</head><style>
      body {
          font-family: 'Quicksand', sans-serif;
          margin: 0;
          padding: 0;
          background-color: #999; 
          color: #333;
      }
      .box-formulir {
          width: 90%;
          max-width: 800px;
          margin: 40px auto;
          background: #fff;
          padding: 20px 30px;
          border-radius: 10px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .box-formulir h2, .box-formulir h3 {
          text-align: center;
          margin-bottom: 20px;
          color: #333;
      }
      .table-form {
          width: 100%;
          border-collapse: collapse;
      }
      .table-form td {
          padding: 10px;
          vertical-align: top;
      }
      .table-form td:first-child {
          width: 30%;
          font-weight: bold;
          color: #555;
      }
      .input-control {
          width: 100%;
          padding: 10px;
          border: 1px solid #ddd;
          border-radius: 5px;
          margin-top: 5px;
          font-size: 14px;
      }
      .input-control:focus {
          outline: none;
          border-color: #007bff;
          box-shadow: 0 0 3px rgba(0, 123, 255, 0.5);
      }
      .btn-daftar {
          background: #007bff;
          color: #fff;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          font-size: 16px;
          border-radius: 5px;
          margin-top: 10px;
      }
      .btn-daftar:hover {
          background: #0056b3;
      }
      textarea {
          resize: none;
      }
      @media (max-width: 600px) {
          .table-form td:first-child {
              width: 100%;
          }
          .table-form td {
              display: block;
              width: 100%;
          }
          .table-form td:first-child {
              margin-top: 15px;
          }
      }
  </style>

<body>
    <section class="box-formulir">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="box">
                <h3>Informasi Akademik</h3>
                <table class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2025/2026">
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">Pilih</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Bisnis Digital">Bisnis Digital</option>
                                <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                                <option value="Managemen Informatika">Managemen Informatika</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="box">
                <h3>Data Diri Calon Mahasiswa</h3>
                <table class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>
                            <input type="text" name="nm" class="input-control" placeholder="Masukkan nama lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control" placeholder="Masukkan tempat lahir">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
                            <input type="radio" name="jk" value="Perempuan" style="margin-left: 20px;"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>
                            <textarea class="input-control" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>
                            <input type="text" name="no_hp" class="input-control" placeholder="Masukkan nomor HP">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email" class="input-control" placeholder="Masukkan email">
                        </td>
                    </tr>
                    <tr>
                         <td>Upload Pas Foto</td>
                        <td>
                        <input type="file" name="pas_foto" class="input-control" accept=".jpg,.jpeg" required>
                        <small>Format yang diperbolehkan: JPG atau JPEG</small>
                    </td>
                    </tr>
                    <tr>
                        <td>Upload KTP</td>
                        <td><input type="file" name="ktp" class="input-control" accept=".jpg,.jpeg" required>
                        <small>Format yang diperbolehkan: JPG atau JPEG.</small>
                    </td>
                    </tr>
                    <tr>
                        <td>Upload KK</td>
                        <td><input type="file" name="kk" class="input-control" accept=".pdf" required>
                        <small>Hanya Format PDF yang diperbolehkan.</small>
                    </td>
                    </tr>
                    <tr>
                        <td>Upload Ijazah</td>
                        <td><input type="file" name="ijazah" class="input-control" accept=".pdf" required>
                        <small>Hanya Format PDF yang diperbolehkan.</small>
                    </td>
                    </tr>
                    <tr>
                        <td>Upload SKL</td>
                        <td><input type="file" name="skl" class="input-control" accept=".pdf" required>
                        <small>Hanya Format PDF yang diperbolehkan.</small>
                    </td>
                    </tr>
                    <tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="submit" class="btn-daftar">Daftar Sekarang</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
</body>
</html>