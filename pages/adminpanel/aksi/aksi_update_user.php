<?php
require('../../../koneksi/koneksi.php');
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from users where username = '$username'";
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) > 1) {
    echo "<script>alert('Username Sudah Terpakai,Harap Gunakan Username Lain!!')</script>";
    echo "<script>document.location='../user.php'</script>";
} else {
    echo "<script>alert('Username Masih Tersedia!!')</script>";
    echo "<script>document.location='../user.php'</script>";
}
