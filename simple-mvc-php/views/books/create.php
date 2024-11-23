<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku Baru</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form method="POST" action="index.php?action=create">
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="title" required>
        </div>
        <div class="form-group">
            <label>Penulis:</label>
            <input type="text" name="author" required>
        </div>
        <div class="form-group">
            <label>Tahun Terbit:</label>
            <input type="number" name="published_year" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php?action=index">Kembali ke Daftar</a>
</body>
</html>