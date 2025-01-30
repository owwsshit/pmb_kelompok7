<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $cek = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($cek) > 0) {
        $a = mysqli_fetch_object($cek);

        $_SESSION["stat_login"] = true;
        $_SESSION['id'] = $a->id_admin;
        $_SESSION['nama'] = $a->nm_admin;
        echo '<script>window.location="beranda.php"</script>';
    } else {
        echo '<script>alert("Gagal, username atau password salah")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PMB Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
<style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main-login {
            background: #999;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .main-login h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .input-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-login {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #0056a8;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-color: #003f7f;
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        table td {
            padding: 5px 0;
            font-size: 14px;
            color: #555;
        }

        table td:first-child {
            width: 30%;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section class="main-login">
        <h2>Login Admin</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="user" class="input-control" required placeholder="Masukkan username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="pass" class="input-control" required placeholder="Masukkan password">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="login" value="Login" class="btn-login">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>