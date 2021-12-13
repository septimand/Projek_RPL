<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "projek_rpl");

//variabel nim yang dikirimkan form.php
$nomor_induk = $_GET['nomor_induk'];

//mengambil data
$query = mysqli_query($koneksi, "select * from users where nomor_induk='$nomor_induk'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama_user'=> @$mahasiswa['nama_user'],);

//tampil data
echo json_encode($data);
?>