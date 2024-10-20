<?php
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    // Proses upload file
    $foto = $_FILES['foto']['name'];
    $tmpFoto = $_FILES['foto']['tmp_name'];
    $uploadDir = 'uploads/';
    $fotoBaru = time() . '_' . $foto;

    move_uploaded_file($tmpFoto, $uploadDir . $fotoBaru);
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $fotoBaru);
    header("location:index.php");
} elseif ($aksi == "update") {
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmpFoto = $_FILES['foto']['tmp_name'];
        $uploadDir = 'uploads/';
        $fotoBaru = time() . '_' . $foto;

        move_uploaded_file($tmpFoto, $uploadDir . $fotoBaru);

        // Hapus foto lama jika ada
        if (!empty($_POST['foto_lama'])) {
            $fotoLama = $_POST['foto_lama'];
            unlink($uploadDir . $fotoLama); // Hapus foto lama dari server
        }
    } else {
        $fotoBaru = $_POST['foto_lama'];  // Gunakan foto lama
    }

    // Update data di database
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $fotoBaru);
    header("location:index.php");
} elseif ($aksi == "hapus") {
    $db->hapusData($_GET['id']);
    header("location:index.php");
}
