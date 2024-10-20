<?php
include 'database.php';
$db = new Database();

$id = $_GET['id'];
$detail = $db->editData($id); // Mengambil detail berdasarkan ID
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <h1>Detail Pengguna</h1>
        <hr>

        <?php if (!empty($detail)): ?>
            <?php foreach ($detail as $dataUser): ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="uploads/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="Foto Pengguna" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text"><strong>Nama <span style="margin-left: 78px;">:</strong> <?php echo $dataUser['nama']; ?></p>
                                <p class="card-text"><strong>Jenis Kelamin <span style="margin-left: 20px;">:</strong> <?php echo ($dataUser['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan'; ?></p>
                                <p class="card-text"><strong>No HP <span style="margin-left: 75px;">:</strong> <?php echo $dataUser['nohp']; ?></p>
                                <p class="card-text"><strong>Email<span style="margin-left: 85px;">:</strong> <?php echo $dataUser['email']; ?></p>
                                <p class="card-text"><strong>Alamat lengkap :</strong> <?php echo $dataUser['alamat']; ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Data tidak ditemukan.</p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>