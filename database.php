<?php

class Database
{
    //properties
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "db_php_rohma";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password);
        mysqli_select_db($this->connect, $this->database);

        // // mengecek koneksi  (jika sudah berhasil tidak di gunakan lagi)
        //if ($this->connect->connect_error) {
        //  die("koneksi gagal : " . $this->connect->connect_error);
        //}
        //echo "Koneksi Berhasil";
    }

    function tampilData()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        //var_dump($rows); //untuk mengujimenampilkan data (jika sudah tampil tidak di gunakan lagi)
        return $rows;
    }

    function tambahData($nama, $alamat, $nohp, $jenis_kelamin, $email, $foto)
    {
        mysqli_query($this->connect, "INSERT INTO tb_users VALUES (NULL, '$nama', '$alamat', '$nohp', '$jenis_kelamin', '$email', '$foto')");
    }

    function editData($id)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users WHERE id='$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }



    function updateData($id, $nama, $alamat, $nohp, $jenis_kelamin, $email, $foto)
    {
        if ($foto) {
            $stmt = $this->connect->prepare("UPDATE tb_users SET nama=?, alamat=?, nohp=?, jenis_kelamin=?, email=?, foto=? WHERE id=?");
            $stmt->bind_param("ssssssi", $nama, $alamat, $nohp, $jenis_kelamin, $email, $foto, $id);
        } else {
            $stmt = $this->connect->prepare("UPDATE tb_users SET nama=?, alamat=?, nohp=?, jenis_kelamin=?, email=? WHERE id=?");
            $stmt->bind_param("ssssi", $nama, $alamat, $nohp, $jenis_kelamin, $email, $id);
        }
        if (!$stmt->execute()) {
            die("Error: " . $stmt->error);
        }
        $stmt->close();
    }

    function hapusData($id)
    {
        //mysqli_query($this->connect, "DELETE FROM tb_users WHERE tb_users.id = '$id'");
        mysqli_query($this->connect, "DELETE FROM tb_users WHERE `tb_users`.`id` = '$id'");
    }
}
