<?php
$host = 'localhost';
$dbname = 'dedari_bali';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "✅ Koneksi database BERHASIL!";
} catch(PDOException $e) {
    echo "❌ Koneksi database GAGAL: " . $e->getMessage();
}
?>