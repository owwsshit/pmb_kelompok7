<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brosur Kampus - PMB STMIK KAPUTAMA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="header">
        <h1>Brosur Kampus</h1>
        <p>Informasi lengkap tentang kampus kami.</p>
    </div>
    <div class="brosur-container">
        <h2>Unduh Brosur Kampus</h2>
        <p>Silakan unduh brosur kampus kami untuk mengetahui informasi lebih lengkap tentang PMB STMIK KAPUTAMA.</p>
        <div class="brosur-viewer">
            <iframe src="brosurkampus.pdf" width="100%" height="500px" style="border: none;"></iframe>
        </div>
        <div class="btn-container">
            <a href="brosurkampus.pdf" download class="btn-download">
                <i class="fa fa-download"></i> Unduh Brosur
            </a>
        </div>
</div>
    <div class="footer">
        <p>&copy; 2024 PMB STMIK KAPUTAMA | All Rights Reserved</p>
    </div>
</body>
</html>
<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* Body Styling */
body {
    background-color: #999;
    color: #333;
    line-height: 1.6;
}

/* Header Section */
.header {
    background-color: #2c2f33;
    color: #999;
    text-align: center;
    padding: 20px 10px;
}

.header h1 {
    font-size: 2.5rem;
}

.header p {
    font-size: 1rem;
}

/* Brosur Section */
.brosur-container {
    width: 80%;
    margin: 30px auto;
    text-align: center;
    background-color: #ccc;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.brosur-container h2 {
    color: #2c2f33;
    margin-bottom: 15px;
    font-size: 1.8rem;
}

.brosur-container p {
    margin-bottom: 20px;
    font-size: 1rem;
    color: #666;
}

/* Brosur Viewer */
.brosur-viewer {
    margin: 20px 0;
}

/* Download Button */
.btn-container {
    margin-top: 20px;
}

.btn-download {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-download i {
    margin-right: 5px;
}

.btn-download:hover {
    background-color: #0056b3;
}

/* Footer */
.footer {
    text-align: center;
    padding: 10px;
    background-color: #2c2f33;
    color: #fff;
    margin-top: 20px;
}
</style>