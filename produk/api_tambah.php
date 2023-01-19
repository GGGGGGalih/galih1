<?php
require_once('../config/koneksi_db.php');
if(isset($_POST['nama_produk']) && isset($_POST['tipe_produk']) && isset($_POST['harga']) && isset($_POST['stock']) ){
    $nama_produk = $_POST['nama_produk'];
    $tipe_produk = $_POST['tipe_produk'];
    $sql = $conn->prepare("INSERT INTO produk (nama_produk, tipe_produk, hara, stock) VALUES (?, ?, ?, ?)");
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $sql->bind_param('ssdd', $nama_produk, $tipe_produk, $harga, $stock);
    $sql->execute();
    if ($sql){
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }else {
        echo "GAGAL";
    }
}
?>