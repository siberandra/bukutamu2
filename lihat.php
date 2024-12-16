<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
    <link href="user.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div align="center" id="banner"></div>	
    <table width="902" border="1" align="center">
        <tr>
            <td width="320" bgcolor="#000000">
                <div align="center" class="style1"><a class="menu" href="index.php">Beranda</a></div>
            </td>
            <td width="320" bgcolor="#000000">
                <div align="center" class="style1"><a class="menu" href="home.php">Buku Tamu</a></div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <?php
                // Koneksi ke database
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'tamu';

                $connection = new mysqli($server, $user, $password, $database);

                // Periksa koneksi
                if ($connection->connect_error) {
                    die("Koneksi gagal: " . $connection->connect_error);
                }

                // Ambil data dari tabel tamu
                $sql = "SELECT * FROM tamu";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table width='500' border='1' cellpadding='1' cellspacing='1' align='center'>";
                    echo "<tr><td colspan='2' bgcolor='#0000FF' class='HEAD2' align='center'><span class='style1'>DAFTAR BUKU TAMU</span></td></tr>";

                    while ($data = $result->fetch_assoc()) {
                        echo "<tr><td colspan='2'><b>Nomor [" . $data['no'] . "]</b></td></tr>";
                        echo "<tr><td align='right'><b>Nama:</b></td><td>" . $data['nama'] . "</td></tr>";
                        echo "<tr><td align='right'><b>Email:</b></td><td>" . $data['email'] . "</td></tr>";
                        echo "<tr><td align='right' valign='top'><b>Pesan:</b></td><td>" . $data['pesan'] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p align='center'>Tidak ada data buku tamu.</p>";
                }

                // Tutup koneksi
                $connection->close();
                ?>
                <p align="center"><a href="index.php">KEMBALI</a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="#000000">
                <marquee scrollamount="3"><span class="style1">Copyright 2024</span></marquee>
            </td>
        </tr>
    </table>
</body>
</html>

