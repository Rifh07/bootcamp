<?php
$conn = mysqli_connect("localhost", "root", "", "bootcamp");
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}