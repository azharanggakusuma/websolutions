<?php
include "conn.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Menyimpan data ke database
$sql = "INSERT INTO tb_contact (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    // Data berhasil disimpan
    echo "Terimakasih pesan ansa sudah kami terima.";
} else {
    // Terjadi kesalahan saat menyimpan data
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
