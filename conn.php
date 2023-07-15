<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'web_solutions';

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
