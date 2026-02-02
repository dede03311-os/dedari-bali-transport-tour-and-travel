<?php
// Enable error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// ========================================
// KONFIGURASI DATABASE - SESUAIKAN INI!
// ========================================
$host = 'localhost';
$dbname = 'dedari_bali';  // GANTI dengan nama database Anda
$username = 'root';        // GANTI jika berbeda
$password = '';            // GANTI dengan password database Anda (kosong untuk XAMPP default)

// Koneksi database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Koneksi database gagal',
        'error' => $e->getMessage(),
        'debug' => [
            'host' => $host,
            'dbname' => $dbname,
            'username' => $username
        ]
    ]);
    exit;
}

// Fungsi untuk membersihkan input
function cleanInput($data) {
    if ($data === null) return '';
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Cek action
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
}

// ========================================
// GET - Ambil semua testimoni
// ========================================
if ($action == 'get') {
    try {
        // Cek apakah tabel testimoni ada
        $checkTable = $pdo->query("SHOW TABLES LIKE 'testimoni'");
        if ($checkTable->rowCount() == 0) {
            echo json_encode([
                'success' => false,
                'message' => 'Tabel testimoni tidak ditemukan',
                'debug' => 'Jalankan script SQL untuk membuat tabel testimoni'
            ]);
            exit;
        }
        
        // Ambil data testimoni (terbaru di atas)
        $stmt = $pdo->query("
            SELECT id, nama, kota, testimoni, created_at 
            FROM testimoni 
            WHERE status = 'approved' 
            ORDER BY created_at DESC 
            LIMIT 50
        ");
        $testimoni = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode([
            'success' => true,
            'data' => $testimoni,
            'count' => count($testimoni),
            'message' => 'Data berhasil diambil'
        ], JSON_UNESCAPED_UNICODE);
        
    } catch(PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Gagal mengambil data testimoni',
            'error' => $e->getMessage()
        ]);
    }
    exit;
}

// ========================================
// POST - Tambah testimoni baru
// ========================================
if ($action == 'add') {
    // Cek method
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode([
            'success' => false,
            'message' => 'Method tidak diizinkan. Gunakan POST.'
        ]);
        exit;
    }
    
    // Ambil data dari POST
    $testimoni = isset($_POST['testimoni']) ? cleanInput($_POST['testimoni']) : '';
    $nama = isset($_POST['nama']) ? cleanInput($_POST['nama']) : '';
    $kota = isset($_POST['kota']) ? cleanInput($_POST['kota']) : '';
    
    // Validasi input
    $errors = [];
    
    if (empty($testimoni)) {
        $errors[] = 'Testimoni tidak boleh kosong';
    } elseif (strlen($testimoni) < 10) {
        $errors[] = 'Testimoni minimal 10 karakter';
    } elseif (strlen($testimoni) > 1000) {
        $errors[] = 'Testimoni maksimal 1000 karakter';
    }
    
    if (empty($nama)) {
        $errors[] = 'Nama tidak boleh kosong';
    } elseif (strlen($nama) < 3) {
        $errors[] = 'Nama minimal 3 karakter';
    } elseif (strlen($nama) > 100) {
        $errors[] = 'Nama maksimal 100 karakter';
    }
    
    if (empty($kota)) {
        $errors[] = 'Kota tidak boleh kosong';
    } elseif (strlen($kota) < 3) {
        $errors[] = 'Kota minimal 3 karakter';
    } elseif (strlen($kota) > 100) {
        $errors[] = 'Kota maksimal 100 karakter';
    }
    
    // Jika ada error validasi
    if (!empty($errors)) {
        echo json_encode([
            'success' => false,
            'message' => implode(', ', $errors),
            'errors' => $errors
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }
    
    // Simpan ke database
    try {
        $stmt = $pdo->prepare("
            INSERT INTO testimoni (nama, kota, testimoni, status, created_at) 
            VALUES (?, ?, ?, 'approved', NOW())
        ");
        $result = $stmt->execute([$nama, $kota, $testimoni]);
        
        if ($result) {
            $newId = $pdo->lastInsertId();
            
            echo json_encode([
                'success' => true,
                'message' => 'Testimoni berhasil disimpan!',
                'id' => $newId,
                'data' => [
                    'id' => $newId,
                    'nama' => $nama,
                    'kota' => $kota,
                    'testimoni' => $testimoni,
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ], JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Gagal menyimpan testimoni'
            ]);
        }
        
    } catch(PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Database error saat menyimpan',
            'error' => $e->getMessage()
        ]);
    }
    exit;
}

// ========================================
// Action tidak valid
// ========================================
echo json_encode([
    'success' => false,
    'message' => 'Action tidak valid atau tidak ditemukan',
    'available_actions' => ['get', 'add'],
    'usage' => [
        'GET' => '?action=get',
        'POST' => 'action=add dengan data: testimoni, nama, kota'
    ]
]);
?>