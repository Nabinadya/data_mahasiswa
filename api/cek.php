<?php
$conn = mysqli_connect("localhost", "root", "password_anda", "nama_database");

$nama_input = $_POST['nama_user'];

$query = "SELECT * FROM tabel_users WHERE LOWER(nama) = LOWER('$nama_input')";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<script>
            alert('Maaf, nama [$nama_input] tidak terdaftar di sistem kami.');
            window.location.href='halaman_input.php';
          </script>";
} else {
    // JIKA NAMA ADA
    echo "Halo, data Anda ditemukan!";
}
?>