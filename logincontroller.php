<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config/koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$cek = $mysqli->query("SELECT * FROM user_admin where username='$username' and password='$password'");
// $cek = $mysqli->num_rows();
// var_dump($cek);
// return;
if ($cek->num_rows > 0) {
    $data = mysqli_fetch_assoc($mysqli);
    //menyimpan session user, nama, status dan id login
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id_login'];
    header("location:main2.php");
} else {
    header("location:index.php?pesan=gagal login data tidak ditemukan.");
}
