<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <form method="post" action="nilai.php">
                    <table width="535" border="1" cellpadding="1" cellspacing="1" align="center">
                        <tr>
                            <td colspan="2" bgcolor="#0000FF">
                                <div class="entry" align="center">
                                    <p>SILAKAN ISI BUKU TAMU</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input name="nama" type="text" size="53" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input name="email" type="text" size="53" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td>Pesan</td>
                            <td><textarea cols="38" rows="5" name="pesan"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Simpan">
                                <input type="reset" value="Hapus">
                            </td>
                        </tr>
                    </table>
                    <p align="center"><b><a href="lihat.php">Lihat Buku Tamu</a></b></p>
                </form>
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

