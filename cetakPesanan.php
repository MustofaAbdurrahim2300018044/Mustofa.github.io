<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <title>Hotel Bintang 5</title>
</head>
<body>
    <div class="navbar">
        <img src="gambar/logo.jpg" alt="logo">
        <p>SPIRITUS HOTEL</p>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="kontak.php">Contact</a></li>
        </ul>
    </div>
    <div class = "container">
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tanggal = $_POST['tanggal'];
        $hari = $_POST['hari'];
        $harga = $_POST['Harga'];

        $file = 'dataPesanan.txt';
        $content = "Nama: $nama\nEmail: $email\nTanggal Check-In: $tanggal\nDurasi: $hari hari\n Harga : $harga";
        file_put_contents($file, $content, FILE_APPEND);

        echo "<div class='bookingForm'>";
        echo "<h3>Nota Pemesanan</h3>";
        echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Tanggal Check-In: " . htmlspecialchars($tanggal) . "</p>";
        echo "<p>Durasi: " . htmlspecialchars($hari) . " hari</p>";
        echo "<p>Terima Kasih Telah Melakukan Pemesanan, $nama. Detail Pemesanan Anda Telah Kami Simpan.</p>";
        echo "</div>";
        ?>

        </div>
    </div>

</body>
</html>