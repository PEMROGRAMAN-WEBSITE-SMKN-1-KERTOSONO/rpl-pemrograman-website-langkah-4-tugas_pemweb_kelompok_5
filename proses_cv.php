<?php
// LOGIKA PEMROSESAN CV - MENANGKAP ISI FORM

// Cek apakah form dikirim dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // ========== 1. MENANGKAP SEMUA DATA DARI FORM ==========
    
    // Data Pribadi
    $nama_lengkap = $_POST['nama_lengkap'] ?? '';
    $email = $_POST['email'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $ttl = $_POST['ttl'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $foto = $_POST['foto'] ?? '';
    
    // Pendidikan
    $pendidikan = $_POST['pendidikan'] ?? '';
    $jurusan = $_POST['jurusan'] ?? '';
    $tahun_lulus = $_POST['tahun_lulus'] ?? '';
    
    // Pengalaman & Keahlian
    $pengalaman = $_POST['pengalaman'] ?? '';
    $keahlian = $_POST['keahlian'] ?? '';
    $bahasa = $_POST['bahasa'] ?? '';
    
    // ========== 2. VALIDASI DATA ==========
    $errors = array();
    
    if (empty($nama_lengkap)) {
        $errors[] = "Nama lengkap wajib diisi";
    }
    
    if (empty($email)) {
        $errors[] = "Email wajib diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }
    
    if (empty($telepon)) {
        $errors[] = "Nomor telepon wajib diisi";
    }
    
    // ========== 3. FUNGSI UNTUK KEAMANAN ==========
    function bersihkan($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
    
    // ========== 4. SIMPAN DATA KE SESSION ==========
    session_start();
    
    // Jika ada error, simpan dan kembali ke form
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: index.html");
        exit;
    }
    
    // Simpan data yang sudah dibersihkan
    $_SESSION['cv_data'] = array(
        'nama_lengkap' => bersihkan($nama_lengkap),
        'email' => bersihkan($email),
        'telepon' => bersihkan($telepon),
        'ttl' => bersihkan($ttl),
        'alamat' => nl2br(bersihkan($alamat)),
        'foto' => bersihkan($foto),
        'pendidikan' => bersihkan($pendidikan),
        'jurusan' => bersihkan($jurusan),
        'tahun_lulus' => bersihkan($tahun_lulus),
        'pengalaman' => nl2br(bersihkan($pengalaman)),
        'keahlian' => bersihkan($keahlian),
        'bahasa' => bersihkan($bahasa)
    );
    
    // ========== 5. LANJUT KE HALAMAN HASIL ==========
    header("Location: hasil_cv.php");
    exit;
    
} else {
    // Jika bukan method POST, balik ke form
    header("Location: index.html");
    exit;
}
?>