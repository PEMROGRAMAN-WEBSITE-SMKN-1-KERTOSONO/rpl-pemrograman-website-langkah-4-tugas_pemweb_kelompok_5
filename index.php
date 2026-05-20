<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>📄 Buat CV Online</h1>
        <p>Isi data diri Anda dengan lengkap</p>

        <form action="proses_cv.php" method="POST" enctype="multipart/form-data">
            <!-- DATA PRIBADI -->
            <fieldset>
                <legend>Data Pribadi</legend>
                
                <label>Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" required placeholder="contoh: Nila Rahmatan Nafisah">
                
                <label>Email:</label>
                <input type="email" name="email" required>
                
                <label>Nomor Telepon:</label>
                <input type="tel" name="telepon" required>
                
                <label>Tempat, Tanggal Lahir:</label>
                <input type="text" name="ttl" placeholder="Jakarta, 10 Mei 1995">
                
                <label>Alamat:</label>
                <textarea name="alamat" rows="3" placeholder="Jl. Merdeka No. 123, Jakarta"></textarea>
                
                <label>Foto (URL gambar):</label>
                <input type="text" name="foto" placeholder="https://example.com/foto.jpg">
            </fieldset>

            <!-- PENDIDIKAN -->
            <fieldset>
                <legend>Pendidikan</legend>
                
                <label>Pendidikan Terakhir:</label>
                <select name="pendidikan">
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
                
                <label>Jurusan/Program Studi:</label>
                <input type="text" name="jurusan" placeholder="Teknik Informatika">
                
                <label>Tahun Lulus:</label>
                <input type="number" name="tahun_lulus" min="1980" max="2030">
            </fieldset>

            <!-- PENGALAMAN & KEAHLIAN -->
            <fieldset>
                <legend>Pengalaman & Keahlian</legend>
                
                <label>Pengalaman Kerja:</label>
                <textarea name="pengalaman" rows="3" placeholder="- Web Developer di PT ABC (2020-2023)&#10;- Freelance Designer (2018-sekarang)"></textarea>
                
                <label>Keahlian (Skills):</label>
                <input type="text" name="keahlian" placeholder="PHP, JavaScript, Laravel, React">
                
                <label>Bahasa yang Dikuasai:</label>
                <input type="text" name="bahasa" placeholder="Indonesia (aktif), Inggris (pasif)">
            </fieldset>

            <button type="submit">✨ Buat CV Sekarang</button>
        </form>
    </div>
</body>
</html>