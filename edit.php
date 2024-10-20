<?php
include 'database.php';
$db = new Database;
//var_dump($db->editData($_Get['id'])); // menguji fungsi edit untuk melihat data berdasarkan id
$detail = $db->editData($_GET['id']);



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <!-- Menambah Teks Judul -->
        <h1>OOP PHP CRUD</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <!-- membuat form update data user -->
        <form method="POST" action="proses.php?aksi=update" enctype="multipart/form-data">

            <?php
            foreach ($detail as $dataUser) {
            ?>
                <input type="hidden" name="id" value="<?php echo $dataUser['id'] ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat"><?php echo $dataUser['alamat'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp'] ?>">
                </div>


                <!-- tambahan -->
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L" <?php if ($dataUser['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-Laki</option>
                        <option value="P" <?php if ($dataUser['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $dataUser['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <!-- Menampilkan foto saat ini -->
                    <p>Foto saat ini:</p>
                    <?php if (!empty($dataUser['foto'])): ?>
                        <p><img src="uploads/<?php echo $dataUser['foto']; ?>" alt="Foto Pengguna" width="100" height="100" /></p>

                    <?php else: ?>
                        <p>Tidak ada foto yang diunggah.</p>
                    <?php endif; ?>
                </div>



            <?php
            }
            ?>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</body>

</html>