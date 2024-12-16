<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "tamu");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari form
$nama = htmlspecialchars(trim($_POST['nama']));
$email = htmlspecialchars(trim($_POST['email']));
$pesan = htmlspecialchars(trim($_POST['pesan']));

// Validasi input
if (empty($nama) || empty($email) || empty($pesan)) {
    echo "<script>
            alert('PESAN GAGAL, ISI SEMUA DATA ..!!');
            javascript:history.go(-1);
          </script>";
    exit;
} else {
    // Gunakan prepared statement
    $stmt = $conn->prepare("INSERT INTO tamu (nama, email, pesan) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $email, $pesan);

    if ($stmt->execute()) {
        echo "<script>
                alert('PESAN TELAH DISIMPAN ..!!');
                javascript:history.go(-1);
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . $stmt->error . "');
                javascript:history.go(-1);
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>


